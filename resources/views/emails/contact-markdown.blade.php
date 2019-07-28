@component('mail::message')
# AEEE TIMEEEEE!!
<br>
Você recebeu uma mensagem. Segue os dados:  

- Nome: {{ $nome }}  
- E-mail: {{ $email }}  
- Mensagem: {{ $mensagem }}

Lembra que você tem até 24h pra responder esse e-mail!
<br>
<br>
<br>
<br>
Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
