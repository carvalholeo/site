<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ mix('css/all.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('css/error.css') }}" />
    <title>Erro 501 - Não implementado | Léo Carvalho </title>
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1" id="errorTitle">Erro 501</h1>
                        <h5 class="h5">Isso não vai funcionar</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/errors/500.gif') }}" class="rounded img-fluid">
                            </div>

                            <p class="text-muted">Questões internas de progrmação... Significa que as coisas foram feitas internamente do jeito errado.</p>
                            <p class="text-muted">Porém, fique tranquilo. O admin do site já está sabendo e trabalhando para resolver. Tente novamente mais tarde ;-)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
