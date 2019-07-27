@extends('layout.app', ["current" => "resume"])

@section('title', 'Mini-bio | Léo Carvalho')

@section('body')

<div class="container">
    <div class="text-justify">
        <h1 class="text-center">Vamos falar um pouco sobre mim?</h1>
        
        <p class="text-wrap">
            Estudante e desenvolvedor de sites e sistemas. Prazer: Leonardo, 24 anos. Viciado em estudar, ler notícias e descobrir novos memes. Gerente de projetos voluntário em uma comunidade virtual.
        </p>
        
        <p class="text-wrap">
            Nascido e criado no litoral de SP, quer um dia morar na Europa, Canadá ou em São Paulo mesmo. Ama café (mas só pra beber mesmo, não conhece nada sobre) e dormir (atividade excelente, diga-se de passagem).
        </p>
        
        <p class="text-wrap">
            Tem muita vontade de praticar exercícios físicos, mas sozinho é complicado, né!? Vira e mexe esquece o que é esquerda e direita.
        </p>

        <div class="text-center">
            <figure class="figure">
                <img class="img-fluid rounded mx-auto d-block" src="{{ asset('storage/images/leonardo.jpg') }}">
                <figcaption class="figure-caption">Uma foto da minha rara beleza, tirada em 2018, na praça Mauá (Santos/SP), durante uma exposição de carros antigos.</figcaption>
            </figure>
        </div>

        <p class="text-wrap">
            De vez em quando, em casa, viaja na maionese, pensando que a solução dos problemas do mundo talvez seja a proposta do Thanos.
        </p>

        <p class="text-wrap">
            Já trabalhou nos segmentos de Atacarejo, Equipamentos de segurança e salvatagem, Setor Público, Serviços Educacionais, Telemarketing e RH. Agora quer entrar de cabeça na área de tecnologia, como desenvolvedor ou suporte técnico.
        </p>

        <p class="text-wrap">
            Na área de tecnologia, se interessa desde criança pelos computadores e por entender como eles funcionam. Ficou rapidamente fascinado em como é relativamente simples criar outros programas.
        </p>

        <p class="text-wrap">
            É extremamente apaixonado por computação, tecnologia e, principalmente, programação. 
        </p>

        <p class="text-wrap">
            Seu foco atualmente é desenvolvimento de sistemas web e sites no back-end. A maior parte do seu conhecimento é com a linguagem PHP e está estudando C#/.Net. No front-end, não se considera expert, mas sabe se virar e resolver a maior parte das demandas que ele mesmo inventa.
        </p>

        <p class="text-wrap">
            Ficou interessado? Vamos bater um papo! <a class="nav-item disabled" href="{{ route('contact.index') }}"  aria-disabled="true">Entre em contato</a> e vamos falar um pouco mais sobre essa história.
        </p>

    </div>
</div>

@endsection