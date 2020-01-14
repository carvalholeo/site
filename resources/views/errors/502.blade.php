<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" />
    @include('components.commom-css')
    <title>Erro 502 - Bad Gateway | Léo Carvalho </title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1" id="errorTitle">Erro 502</h1>
                        <h5 class="h5">Servidor principal com erro</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/errors/500.gif') }}" class="rounded img-fluid">
                            </div>

                            <p class="text-muted">O servidor que você está conectado recebeu um pedido inválido do servidor principal.</p>
                            <p class="text-muted">No momento, não há nada que vocÊ possa fazer, a não ser esperar a correção em breve. Daqui a pouco estamos de volta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
