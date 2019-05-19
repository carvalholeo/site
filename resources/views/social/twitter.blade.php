@extends('layout.app', ["current" => "construction"])

@section('title')
    Twitter | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no Twitter!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://twitter.com/_carvalho_leo";
        redirect(url);
    </script>
@endsection