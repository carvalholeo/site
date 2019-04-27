<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

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
        @component('layout.component_navbar', ["current" => $current])
        @endcomponent
        <main  role="main">
        @hasSection('body')
            @yield('body')
        @endif
    </div>
    
    @hasSection('javascript')
        @yield('javascript')
    @endif
    
</body>
</html>