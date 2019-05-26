@extends('layout.app', ["current" => "construction"])

@section('title')
    Telegram | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu chat do Telegram!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://t.me/carvalho_leo";
        redirect(url);
    </script>
@endsection