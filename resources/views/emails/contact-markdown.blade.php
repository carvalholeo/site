@component('mail::message')
# AEEE TIMEEEEE!!
<br>
Você recebeu uma mensagem. Segue os dados:  

- Nome: {{ $contact->nome }}  
- E-mail: {{ $contact->email }}  
- Mensagem: {{ $contact->mensagem }}

Lembra que você tem até 24h pra responder esse e-mail!
<br>
<br>
<br>
<br>
Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
