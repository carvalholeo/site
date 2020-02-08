<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" />
    @include('components.commom-css')
    <title>Erro 504 - Tempo esgotado | Léo Carvalho </title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1" id="errorTitle">Erro 504</h1>
                        <h5 class="h5">Tempo esgotado para resposta</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/errors/500.gif') }}" class="rounded img-fluid">
                            </div>

                            <p class="text-muted">Parece que estamos recebendo muitos acessos e o servidor não está dando conta de responder rapidamente!</p>
                            <p class="text-muted">A única coisa que dá pra fazer nesse momento é esperar. Tome um café e volte mais tarde ;-)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
