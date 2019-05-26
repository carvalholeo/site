<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="p:domain_verify" content="cc355e0c54673679bbb76cccfc621d0c"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/navbar.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" async></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript" async></script>
    <script src="{{ asset('js/extended.js') }}" type="text/javascript" async></script>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <style>
    body {
        padding: 20px;
    }

    .navbar {
        margin-bottom: 20px;
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