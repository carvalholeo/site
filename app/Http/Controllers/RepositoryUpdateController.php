<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class RepositoryUpdateController extends Controller
{
    public function update(Request $request)
    {
        if ($this->validateGithubHeaders($request)) {
            RepositoryUpdateController::executeUpdate();
        }
        return response('Requisição inválida.', 403);
    }

    private function validateGithubHeaders(Request $request) : bool
    {
        $userAgent = $_SERVER['User-Agent'];
        $contentType = $_SERVER['application/json'];
        $xHubSignature = $_SERVER['X-Hub-Signature'];

        $isSecretValid = RepositoryUpdateController::isGithubSecretValid($request, $xHubSignature);
        
        $userAgent = explode('/', $userAgent);
        $userAgent = substr($userAgent, 12);

        $contentType = substr($contentType, 14);


        if ($userAgent != 'GitHub-Hookshot'
            || $contentType != 'application/json'
            || !$isSecretValid)
        {
            return true;
        }
        
        return false;
    }

    private static function isGithubSecretValid(Request $request, $xHubSignature) : bool
    {
        $secret = getenv('GITHUB_SECRET_PASSWORD');
        $body = $request->getContent();
        $secret = hash_mac('sha1', $body, $secret);

        if (hash_equals($secret, $xHubSignature)) {
            return true;
        }
        return false;
    }

    private static function executeUpdate()
    {
        $process = new Process(['git', 'pull', 'origin', 'master', '2>&1']);
        $process->run();
        if (!$process->isSuccessful()) {
            return response('Erro interno. Não foi possível atualizar o site.', 503);
        }
        return response('Enviado com sucesso. Atualizará em breve.', 201);
    }
}
