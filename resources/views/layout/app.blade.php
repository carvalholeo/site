<!DOCTYPE html>
<html lang="pt">

<head>
    @include('components.tracking-head')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="container">
        @component('components.navbar')
        @endcomponent
        <main role="main">
            @component('components.flash-messages')
            @endcomponent

            @hasSection('body')
                @yield('body')
            @endif
        </main>
        <br>
    </div>

    <footer class="ftco-footer ftco-section" role="complementary">
        @component('components.footer')
        @endcomponent

        @hasSection('javascript')
            @yield('javascript')
        @endif
    </footer>

@include('components.tracking-footer')

</body>

</html>
