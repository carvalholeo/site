<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="p:domain_verify" content="0d6d3731c70b9bdcdde4e31b18925f9b"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
    <script src="https://kit.fontawesome.com/aff5b0769d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/navbar.css') }}" />
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/extended.js') }}" type="text/javascript"></script>


    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <style>
    body {
        padding: 20px;
    }

    .navbar {
        margin-bottom: 20px;
    }
    @media screen and (max-width: 575px) {
        #rc-imageselect, .g-recaptcha
        {
            transform:scale(0.77);
            -webkit-transform:scale(0.77);transform-origin:0 0;
            -webkit-transform-origin:0 0;
        }
    }
    </style>

    <title>
        @yield('title')
    </title>

</head>

<body>
    <div class="container">
        @component('components.navbar', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('body')
            @yield('body')
            @endif
        </main>
        <hr />
    </div>

    <footer class="container footer navbar-fixed-bottom">
        @component('components.footer')
        @endcomponent

        @hasSection('javascript')
            @yield('javascript')
        @endif
    </footer>
</body>

</html>
