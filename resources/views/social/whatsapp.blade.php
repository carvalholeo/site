@extends('layout.app', ["current" => "construction"])

@section('title')
    WhatsApp | Léo Carvalho
@endsection

@section('body')
Aguarde um instante, você já está indo para o meu chat do WhatsApp!
@endsection

@section('javascript')
    <script type="text/javascript">
        url = "http://wa.me/5513997375760?source=site&text=Vamos falar de negócios!";
        redirect(url);
    </script>
@endsection
