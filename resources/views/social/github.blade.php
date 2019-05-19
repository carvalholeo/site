@extends('layout.app', ["current" => "construction"])

@section('title')
    GitHub | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfil no GitHub!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.github.com/carvalholeo/";
        redirect(url);
    </script>
@endsection