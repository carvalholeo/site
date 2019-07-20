<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class UpdateController extends Controller
{
    public function update(Request $request)
    {
        $text = array("response" => "");
        $payload = $request->input();

        $cdPull = 'cd /home/u701084516/domains/leocarvalho.tech/app/site/public';
        $gitPull = 'GIT_WORK_TREE=/home/u701084516/domains/leocarvalho.tech/app/site git pull';
        $gitCheckoutMaster = 'GIT_WORK_TREE=/home/u701084516/domains/leocarvalho.tech/app/site git checkout master -f';
        $gitCheckoutStage = 'GIT_WORK_TREE=/home/u701084516/domains/leocarvalho.tech/app/site git checkout stage -f';
        $cdStorage = 'cd /home/u701084516/domains/leocarvalho.tech/app/site/public';
        $rmStorage = 'rm storage';
        $lnStorage = 'ln -s /home/u701084516/domains/leocarvalho.tech/app/site/storage/app/public/ storage';


        if($request->header()["user-agent"][0] != 'GitHub-Hookshot' || 
        $request->header()["content-type"][0] != 'application/json') {

            $text = array("response" => "Event didn't come from GitHub.");
            $text = json_encode($text);
            return response($text, 406);
        }

        if($request->header()["x-github-event"][0] != 'push'){
            
            $text = array("response" => "Event received successful.");
            $text = json_encode($text);
            return response($text, 200);
        }
        try {

            if($payload['ref'] == 'refs/heads/master') {
                \Artisan::call('down');
                $process = new Process([$cdPull, $gitPull, $gitCheckoutMaster, $cdStorage, $rmStorage, $lnStorage]);
                $process->run();

                $text = array("response" => "Request was sent to the server and will be processed ASAP.");
                $text = json_encode($text);
                return response($text, 202);
            } elseif ($payload['ref'] == 'refs/heads/stage') {
                \Artisan::call('down');
                $process = new Process([$cdPull, $gitPull, $gitCheckoutStage, $cdStorage, $rmStorage, $lnStorage]);
                $process->run();

                $text = array("response" => "Request was sent to the server and will be processed ASAP.");
                $text = json_encode($text);
                return response($text, 202);
            } else {
                $text = array("response" => "Brach doesn't registered at server");
                $text = json_encode($text);
                return response($text, 412);
            }
        }  catch(Exception $e) {

            $text = array("response" => $e->getMessage());
            $text = json_encode($text);
            return response($text, 503);
        } finally {

            \Artisan::call('up');
        }
    }
}
