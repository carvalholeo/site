@extends('layout.app')

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu blog!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://blog.leocarvalho.dev";
        redirect(url);
    </script>
@endsection
