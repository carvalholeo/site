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
        @component('components.navbar', ["current" => $current])
        @endcomponent
        <main  role="main">
        @hasSection('body')
            @yield('body')
        @endif
        </main>
    </div>
    
    @hasSection('javascript')
        @yield('javascript')
    @endif

    <script type="text/javascript">
    $(document).ready(function () {
        $('.navbar .dropdown-item').on('click', function (e) {
            var $el = $(this).children('.dropdown-toggle');
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');

            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
        });

        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
            $(this).find('li.dropdown').removeClass('show open');
            $(this).find('ul.dropdown-menu').removeClass('show open');
        });

    });
    </script>

    @component('components.footer')
    @endcomponent
    
</body>
</html>