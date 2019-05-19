@extends('layout.app', ["current" => "construction"])

@section('title')
    WordPress | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu blog no WordPress!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://carvalholeo.wordpress.com/";
        redirect(url);
    </script>
@endsection