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
            return RepositoryUpdateController::executeUpdate();
        }
        return response('Requisição inválida.', 403);
    }

    private function validateGithubHeaders(Request $request) : bool
    {
        return true;
        /* $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $contentType = $_SERVER['HTTP_CONTENT_TYPE'];
        $xHubSignature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

        $isSecretValid = RepositoryUpdateController::isGithubSecretValid($request, $xHubSignature);
        
        $userAgent = explode('/', $userAgent);
        $userAgent = $userAgent[0];

        if ($userAgent != 'GitHub-Hookshot'
            || $contentType != 'application/json')
        {
            return false;
        }
        
        return true; */
    }

    private static function isGithubSecretValid(Request $request, $xHubSignature) : bool
    {
        $secret = getenv('GITHUB_SECRET_PASSWORD');
        $body = $request->getContent();
        $secret = hash_hmac('sha1', $body, $secret);

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
