<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class RepositoryUpdateController extends Controller
{
    public function update(Request $request)
    {
        return RepositoryUpdateController::executeUpdate();
    }

    private static function executeUpdate()
    {
        $exec = shell_exec('sudo git pull origin master 2>&1');
		echo $exec;
        if (!$exec) {
            return response('Erro interno. Não foi possível atualizar o site.', 503);
        }
        return response('Enviado com sucesso. Atualizará em breve.', 201);
    }
}
