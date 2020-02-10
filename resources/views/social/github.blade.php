@extends('layout.app')

@section('title')
    GitHub | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu perfil no GitHub!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.github.com/carvalholeo/";
        redirect(url);
    </script>
@endsection
