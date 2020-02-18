@extends('layout.app')

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu perfil no Twitter!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://twitter.com/_carvalho_leo";
        redirect(url);
    </script>
@endsection
