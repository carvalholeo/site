<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contact;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-markdown')
                    ->subject($this->contact->assunto . ' (Formulário de contato no site)')
                    ->with([
                        'nome' => $this->contact->nome,
                        'email' => $this->contact->email,
                        'score' => $this->contact->score,
                        'mensagem' => $this->contact->mensagem
                    ]);


    }
}
