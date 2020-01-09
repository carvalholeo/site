@extends('layout.app', ["current" => "construction"])

@section('title')
    YouTube | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu perfilcanal no YouTube!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.youtube.com/channel/UC8c7IUMpnczt9pmsHlXYxXw";
        redirect(url);
    </script>
@endsection