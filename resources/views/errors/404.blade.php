@extends('layout.app', ["current" => "error"])

<link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" />

@section('body')

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1">Erro 404</h1>
                        <h5 class="h5">Algo de errado não está certo - Esta página não foi existe no site :'(</h4>

                        <div class="text-center">
                            <img src="{{ asset('storage/images/errors/404.gif') }}" class="rounded img-fluid" alt="...">
                        </div>

                        <p class="text-muted">Infelizmente não tenho como te ajudar com isso, porque provavelmente você digitou o endereço
                            errado ou ele não existe mais.</p>
                        <p class="text-muted">Tente ir para a <a href="/">página inicial</a> do site ou entrar em algum dos links no menu
                            acima. =D </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection