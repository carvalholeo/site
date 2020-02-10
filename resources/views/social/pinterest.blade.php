@extends('layout.app')

@section('title')
    Pinterest | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu perfil no Pinterest!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://pinterest.com/carvalho_leo/";
        redirect(url);
    </script>
@endsection
