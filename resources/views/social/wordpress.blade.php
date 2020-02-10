@extends('layout.app')

@section('title')
    WordPress | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu blog no WordPress!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://carvalholeo.wordpress.com/";
        redirect(url);
    </script>
@endsection
