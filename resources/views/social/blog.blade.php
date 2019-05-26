@extends('layout.app', ["current" => "construction"])

@section('title')
    Medium | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu blog no Medium!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://medium.com/@carvalho_leo";
        redirect(url);
    </script>
@endsection