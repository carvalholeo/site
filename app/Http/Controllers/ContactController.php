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
        
        if (self::returnRecaptchaScore($recaptcha)) {

            self::saveInDbContactFormData($request, $recaptcha->score);
            $contact = self::saveInDbContactFormData($request, $recaptcha->score);
            self::sendMailFromContactFormSite($request, $contact);

            return back()->with('success', 'Mensagem enviada com sucesso. Agora é só esperar, que em até 24h te dou um retorno');
        }

        self::saveInDbContactFormData($request, $recaptcha->score);

        return back()->with('error', 'Ocorreu um erro inesperado.
        Fique tranquilo: apesar dele (já fui notificado), sua mensagem foi enviada e vou te dar um retorno 
        em até 72h.');
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

    public function returnRecaptchaScore($response)
    {
        $score = $response->score;

        if ($score >= 0.5) {
            return true;
        } else {
            return false;
        }

    }

    public function sendMailFromContactFormSite($request, Contact $contact)
    {
        $recipient = getenv('MAIL_TO_ADDRESS');
        $bcc = getenv('MAIL_BCC_ADDRESS');
        Mail::to($recipient)
            ->bcc($bcc)
            ->send(new SendMailUser($contact));
    }

    public function saveInDbContactFormData($request, $recaptcha)
    {
        $saveInDb = new Contact();
        $saveInDb->nome = $request->input('nome');
        $saveInDb->email = $request->input('email');
        $saveInDb->mensagem = $request->input('mensagem');
        $saveInDb->assunto = $request->input('assunto');
        $saveInDb->score = $recaptcha;

        $saveInDb->save();

        return $saveInDb;
    }

    public function validateFields($request)
    {
        $rules = [
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
            'recaptcha_response' => 'required',
            'assunto' => 'required'
        ];

        $messages = [
            'nome.required' => 'O campo "Nome" é de preenchimento origatório.',
            'email.required' => 'O campo "E-mail" é de preenchimento obrigatório.',
            'email.email' => 'O e-mail digitado não é válido. Tente novamente.',
            'mensagem.required' => 'O campo "Mensagem" é de preenchimento obrigatório',
            'assunto.required' => 'Você precisa escolher um assunto',
            'recaptcha_response' => 'Sua sessão expirou. Tente novamente.'
        ];

        return $request->validate($rules, $messages);
    }
    
}
