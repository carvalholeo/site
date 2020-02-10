@extends('layout.app')

@section('title')
    LinkedIn | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu perfil no LinkedIn!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.linkedin.com/in/carvalholeo/";
        redirect(url);
    </script>
@endsection
