@extends('layout.app')

@section('title')
    Telegram | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu chat do Telegram!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://t.me/carvalho_leo";
        redirect(url);
    </script>
@endsection
