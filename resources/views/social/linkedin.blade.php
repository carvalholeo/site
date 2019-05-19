@extends('layout.app', ["current" => "construction"])

@section('title')
    LinkedIn | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no LinkedIn!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.linkedin.com/in/carvalholeo/";
        redirect(url);
    </script>
@endsection