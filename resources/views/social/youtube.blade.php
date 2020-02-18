@extends('layout.app')

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu perfilcanal no YouTube!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "https://www.youtube.com/channel/UC8c7IUMpnczt9pmsHlXYxXw";
        redirect(url);
    </script>
@endsection
