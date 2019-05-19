@extends('layout.app', ["current" => "construction"])

@section('title')
    instagram | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no Instagram!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.instagram.com/carvalho_leo";
        redirect(url);
    </script>
@endsection