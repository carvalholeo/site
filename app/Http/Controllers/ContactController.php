<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;

class ContactController extends Controller
{
    public function index()
    {
        return view ('contact.index');
    }

    public function send(Request $request)
    {
        self::validateFields($request);
        $recaptcha = self::validateRecaptcha($request->input('recaptcha_response'));
        
        if (self::validateIfExistsError($recaptcha)) {
            return view('contact.index');
        } else {
            if (self::returnRecaptchaScore($recaptcha)) {

                self::sendMailFromContactFormSite($request);
                self::saveInDbContactFormData($request, $recaptcha->score);
                return back()->with('success', 'Mensagem enviada com sucesso. Agora é só esperar, que em até 24h te dou um retorno');
            } else {

                self::saveInDbContactFormData($request, $recaptcha->score);
                return back()->with('error', 'Atividade suspeita detectada pelo Google. Tente novamente.');
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

    public function sendMailFromContactFormSite($request)
    {
        
    }

    public function saveInDbContactFormData($request, $recaptcha)
    {
        $saveInDb = new Contact();
        $saveInDb->nome = $request->input('nome');
        $saveInDb->email = $request->input('email');
        $saveInDb->mensagem = $request->input('mensagem');
        $saveInDb->score = $recaptcha;

        $saveInDb->save();
    }

    public function validateFields($request)
    {
        $rules = [
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
            'recaptcha_response' => 'required'
        ];

        $messages = [
            'nome.required' => 'O campo "Nome" é de preenchimento origatório.',
            'email.required' => 'O campo "E-mail" é de preenchimento obrigatório.',
            'email.email' => 'O e-mail digitado não é válido. Tente novamente.',
            'mensagem.required' => 'O campo "Mensagem" é de preenchimento obrigatório'
        ];

        return $request->validate($rules, $messages);
    }
    
}
