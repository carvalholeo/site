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

@env('production')
{!! SEO::generate(true) !!}
@endenv

@env('local')
{!! SEO::generate() !!}
@endenv

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-token" content="{{ csrf_token() }}" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" media="none" onload="if(media!='all')media='all'">

<link rel="stylesheet" href="{{ mix('css/all.css') }}">

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="{{ asset('/icon.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('/icon.png') }}">
<meta name="msapplication-TileImage" href="{{ asset('/icon.png') }}">
