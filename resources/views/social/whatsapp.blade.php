@extends('layout.app')

@section('body')
<div id="redirect-social">
    Aguarde um instante, você já está indo para o meu chat do WhatsApp!
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "http://wa.me/5513997375760?source=site&text=Vamos falar de negócios!";
        redirect(url);
    </script>
@endsection
