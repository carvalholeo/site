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
                        <h1 class="h1" id="error503">Erro 503</h1>
                        <h5 class="h5">Site temporariamente fora de serviço</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/errors/503.gif') }}" class="rounded img-fluid"
                                    alt="...">
                            </div>

                            <p class="text-muted">Parece que o site está passando por alguma instabilidade temporária ou
                                uma manutenção programada neste momento.</p>
                            <p class="text-muted">Em breve, voltaremos com a nossa programação normal. Se esta
                                instabilidade estiver ocorrendo há mais de 10 minutos, me manda um <a
                                    href="https://twitter.com/_carvalho_leo" target="_blank">DM no Twitter</a> sobre a
                                falha! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>