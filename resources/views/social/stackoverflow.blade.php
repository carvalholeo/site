@extends('layout.app', ["current" => "construction"])

@section('title')
    Stack Overflow | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no Stack Overflow!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://stackoverflow.com/users/11656950/leonardo-carvalho";
        redirect(url);
    </script>
@endsection