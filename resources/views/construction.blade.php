@extends('layout.app', ["current" => "construction"])

@section('title', 'Em construção | Léo Carvalho')

@section('body')
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                        <h1 class="h1">Quase lá!</h1>
                        <h1 class="h1">Teste!</h1>
                        <h5 class="h4">Ainda estamos em construção do site.</h4>

                            <div class="text-center">
                                <img src="{{ asset('storage/images/construction.gif') }}" class="rounded img-fluid"
                                    alt="...">
                            </div>

                            <p class="text-muted">Em breve isso aqui ficará parecendo um grande jardim florido, mas, por enquanto, não temos nada além desse gif maroto :-P</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection