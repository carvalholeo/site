@extends('layout.app', ["current" => "contact"])

@section('title', 'Contato | Léo Carvalho')

@section('body')

<div class="container">

    <h1>Entre em contato comigo!</h1>
    <p class="text-justify">Que tal a gente essa conversa mais interessante e continuarmos no privado?
     Você pode preencher o formulário abaixo ou mandar uma mensagem em uma das minhas redes sociais 
     (dá uma olhada nos ícones abaixo).
    </p>
    <hr />
 
    <form method="POST" id="contactForm" action="{{ route('contact.send') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        <div class="form-group">
            <label for="nome">Seu nome</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
        </div>
 
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="E-Mail">
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem"></textarea>
        </div>
    
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

        <button type="submit" class="btn btn-primary" id="submit" disabled>Enviar</button>
        <button type="cancel" class="btn btn-danger" id="cancel">Apagar</button>
 
    </form>
 
</div>

<script src="https://www.google.com/recaptcha/api.js?render=6LdoxaYUAAAAAJx8MEuu-K5-AeStQBO9l8yBPpyq"></script>

<script src="{{ asset('js/captcha.js') }}" type="text/javascript"></script>

@endsection