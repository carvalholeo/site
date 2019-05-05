<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/navbar.css') }}" />
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <style>
    body {
        padding: 20px;
    }

    .navbar {
        margin-bottom: 20px;
    }
    </style>

    <title>
        @hasSection('title')
        @yield('section')
        @endif
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
    </div>

    @hasSection('javascript')
    @yield('javascript')
    @endif

    <script type="text/javascript">

    </script>

    @component('components.footer')
    @endcomponent

</body>

</html>