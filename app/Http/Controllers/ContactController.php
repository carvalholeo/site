<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('contact.index');
    }


    public function send(Request $request)
    {
        $recaptcha = self::validateRecaptcha($request->input('recaptcha_response'));
        
        if (self::validateIfExistsError($recaptcha)) {
            return "Error";
        } else {
            if (self::returnRecaptchaScore($recaptcha)) {
                return "Completamente validado";
            } else {
                return "Não confiável";
            }
        }
        
    }

    
    public function validateRecaptcha($response)
    {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = getenv('GOOGLE_RECAPTCHA_SECRET_KEY');
        $recaptcha_response = $response;

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);

        return $recaptcha;
    }

    public function validateIfExistsError($response)
    {
        if (!$response->success) {
            return self::returnRecaptchaError($response);
        } else {
            return false;
        }
    }

    public function returnRecaptchaError($response)
    {
        switch($response->error-codes) {
            case "missing-input-response":
            case "invalid-input-response":
                return "Código Recaptcha está faltando ou é inválido.";
            case "bad-request":
                return "A requisição enviada não está nos parâmetros adequados.";
            case "timeout-or-duplicate":
                return "A requisição está duplicada ou está com o tempo expirado";
            default:
                return "Ocorreu um erro desconhecido";
        }
    }

    public function returnRecaptchaScore($response)
    {
        $score = $response->score;

        if ($score >= 0.5) {
            return true;
        } else {
            return false;
        }

    }
    
}
