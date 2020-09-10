<link rel="preconnect" href="//leocarvalho.dev">
<link rel="preconnect" href="//fonts.gstatic.com">
<link rel="preconnect" href="//fonts.googleapis.com">
<link rel="preconnect" href="//www.gstatic.com">
<link rel="preconnect" href="//www.google.com">
<link rel="preconnect" href="//browser-update.org">
<link rel="preconnect" href="//www.googletagmanager.com">
<link rel="preconnect" href="//wakatime.com">
<link rel="preconnect" href="//pagead2.googlesyndication.com">
<link rel="preconnect" href="//tpc.googlesyndication.com">
<link rel="preconnect" href="//www.google-analytics.com">
<link rel="preconnect" href="//stats.g.doubleclick.net">

<script src="{{ mix('js/extended.js') }}"></script>

@env('production')
{!! SEO::generate(true) !!}
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://www.googletagmanager.com/gtag/js?id=UA-139872605-1"></script>
<script src="{{ mix('js/analytics.js') }}"></script>
@endenv

@env('local')
{!! SEO::generate() !!}
@endenv

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-token" content="{{ csrf_token() }}" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" media="none" onload="if(media!='all')media='all'">

<link rel="stylesheet" href="{{ mix('css/open-iconic-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ mix('css/animate.compat.css') }}">

<link rel="stylesheet" href="{{ mix('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ mix('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ mix('css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ mix('css/aos.css') }}">

<link rel="stylesheet" href="{{ mix('css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ mix('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ mix('css/icomoon.min.css') }}">
<link rel="stylesheet" href="{{ mix('css/style.css') }}">

<link rel="stylesheet" href="{{ mix('css/custom.css') }}">

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="{{ asset('/icon.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('/icon.png') }}">
<meta name="msapplication-TileImage" href="{{ asset('/icon.png') }}">
