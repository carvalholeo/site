<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" />
<title>Temporariamente indisponível</title>

</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1" id="errorTitle">Erro 500</h1>
                        <h5 class="h5">Site temporariamente fora de serviço</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/errors/500.gif') }}" class="rounded img-fluid"
                                    alt="...">
                            </div>

                            <p class="text-muted">Alguém andou mexendo no que não devia e estragou as configurações do site.</p>
                            <p class="text-muted">Porém, fique tranquilo. O admin do site já está sabendo e trabalhando para resolver. Volte mais tarde ;-)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>