<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class UpdateController extends Controller
{
    public function update(Request $request)
    {
        $text = array("response" => "");
        $cdPull = 'cd /home/u701084516/domains/leocarvalho.tech/app/site/public';
        $gitPull = 'git pull https://github.com/carvalholeo/site.git';
        $gitCheckoutMaster = 'git checkout master -f';
        $gitCheckoutStage = 'git checkout stage -f';
        $cdStorage = 'cd /home/u701084516/domains/leocarvalho.tech/app/site/public';
        $rmStorage = 'rm storage';
        $lnStorage = 'ln -s /home/u701084516/domains/leocarvalho.tech/app/site/storage/app/public/ storage';

        if(!$request->header("content-type: application/json")) {
            $text = array("response" => "Event doesn't have a JSON.");
            $text = json_encode($text);
            return response($text, 406);
        }

        if(!$request->header("X-Hub-Signature: sha1=0fe4a606178bf4e25b701ee9183371780b4cc9a4")){
            $text = array("response" => "Password sent doesn't match with GitHub.");
            $text = json_encode($text);
            return response($text, 403);
        }

        $payload = json_decode($request->input('payload'));

        if($payload->ref == 'refs/heads/master') {
            $process = new Process([$cdPull, $gitPull, $gitCheckoutMaster, $cdStorage, $rmStorage, $lnStorage]);
            $process->run();

            $text = array("response" => "Request was sent to the server and will be processed ASAP.");
            $text = json_encode($text);
            return response($text, 202);
        } elseif ($payload->ref == 'refs/heads/stage') {
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
    }
}
