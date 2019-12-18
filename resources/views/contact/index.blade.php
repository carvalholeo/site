@extends('layout.app', ["current" => "contact"])

@section('title', 'Contato | Léo Carvalho')

@section('body')

<div class="container">
    <div class="card border">
        <div class="card-header" id="card-header">

@include('components.flash-messages')

            <div class="card-title">
                <h2>Entre em contato comigo!</h2>
            </div>
        </div>
        <div class="card-body">
            <p class="text-justify">Que tal a gente essa conversa mais interessante e continuarmos no privado?
            Você pode preencher o formulário abaixo ou mandar uma mensagem em uma das minhas redes sociais
            (dá uma olhada nos ícones abaixo).
            </p>
            <hr />

            <form method="POST" id="contactForm" action="{{ route('contact.send') }}" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required autofocus>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required multiple>
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <select id="assunto" name="assunto" class="form-control" required>
                        <option disabled selected>Escolha uma opção</option>
                        <option value="Bugs">Bugs (erros no site)</option>
                        <option value="Ouvidoria">Críticas, elogios e sugestões</option>
                        <option value="Empregos">Oportunidade de emprego</option>
                        <option value="Amizade">Vamos fazer amizade</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem" required></textarea>
                </div>

                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LcEScgUAAAAAIxwvlfw5rbvAuVYdhbbPmChcept" data-callback="recaptchaSuccess" data-expired-callback="recaptchaError" id="recaptcha"></div>
                    <div class="help-block with-errors"></div>
                </div>

                <button type="submit" class="btn btn-primary" id="submit" disabled>Enviar</button>
                <button type="cancel" class="btn btn-danger" id="cancel">Apagar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>


@endsection
