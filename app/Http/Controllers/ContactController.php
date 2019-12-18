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
        $this->validateFields($request);

        $recaptcha = $this->validateRecaptcha($request->input('g-recaptcha-response'));
        //return var_dump($recaptcha);
        if ($recaptcha["success"]) {

            $this->saveInDbContactFormData($request);
            $contact = $this->saveInDbContactFormData($request);
            $this->sendMailFromContactFormSite($request, $contact);

            return back()->with('success', 'Mensagem enviada com sucesso. Agora é só esperar, que em até 24h te dou um retorno');
        }

        return back()->with('error', 'A validação do seu formulário expirou. Tente novamente e somente clique no botão 
        "Não sou um robô" quando estiver prestes a clicar no botão "Enviar".');
    }

    private static function validateRecaptcha($response) : array
    {
        $secret = getenv('GOOGLE_RECAPTCHA_SECRET_KEY');
        $content = http_build_query(array(
            'secret' => $secret,
            'response' => $response
        ));

        $url = "https://www.google.com/recaptcha/api/siteverify?" . $content;

        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => $content
            )
        ));

        $verify = file_get_contents($url, null, $context);
        $recaptcha = json_decode($verify, TRUE);

        return $recaptcha;
    }

    private static function sendMailFromContactFormSite($request, Contact $contact) : void
    {
        $recipient = getenv('MAIL_TO_ADDRESS');
        $bcc = getenv('MAIL_BCC_ADDRESS');
        Mail::to($recipient)
            ->bcc($bcc)
            ->send(new SendMailUser($contact));
    }

    private static function saveInDbContactFormData($request) : Contact
    {
        $saveInDb = new Contact();
        $saveInDb->nome = $request->input('nome');
        $saveInDb->email = $request->input('email');
        $saveInDb->mensagem = $request->input('mensagem');
        $saveInDb->assunto = $request->input('assunto');

        $saveInDb->save();

        return $saveInDb;
    }

    private static function validateFields($request) : array
    {
        $rules = [
            'nome' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|max:2048',
            'g-recaptcha-response' => 'required',
            'assunto' => 'required'
        ];

        $messages = [
            'nome.required' => 'O campo "Nome" é de preenchimento origatório.',
            'nome.max' => 'A quantidade máxima de caracteres do campo "Nome" é de 255.',
            'email.max' => 'A quantidade máxima de caracteres do campo "E-mail" é de 255.',
            'email.required' => 'O campo "E-mail" é de preenchimento obrigatório.',
            'email.email' => 'O e-mail digitado não é válido. Tente novamente.',
            'mensagem.required' => 'O campo "Mensagem" é de preenchimento obrigatório',
            'mensagem.max' => 'A quantidade máxima de caracteres do campo "Mensagem" é de 2048.',
            'assunto.required' => 'Você precisa escolher um assunto',
            'g-recaptcha-response.required' => 'O recaptcha não foi preenchido. Tente novamente.'
        ];

        return $request->validate($rules, $messages);
    }

}
