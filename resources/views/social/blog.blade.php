@extends('layout.app', ["current" => "construction"])

@section('title')
    Blog | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu blog!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://blog.leocarvalho.dev";
        redirect(url);
    </script>
@endsection
