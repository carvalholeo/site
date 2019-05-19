@extends('layout.app', ["current" => "construction"])

@section('title')
    Pinterest | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no Pinterest!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.github.com/carvalholeo/";
        redirect(url);
    </script>
@endsection