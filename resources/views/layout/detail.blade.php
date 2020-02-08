<!DOCTYPE html>
<html lang="pt">

<head>
    @env('production')
    {!! SEO::generate(true) !!}
    @endenv

    @env('local')
    {!! SEO::generate() !!}
    @endenv

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

	<meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" media="none" onload="if(media!='all')media='all'">

    <link rel="stylesheet" href="{{ mix('css/all.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
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
            @include('contact.contact')
        </main>
        <br>
    </div>

    <footer class="ftco-footer ftco-section" role="footer">
        @component('components.footer')
        @endcomponent

        @hasSection('javascript')
            @yield('javascript')
        @endif
    </footer>

<script async src="{{ mix('js/all.js') }}"></script>

@env('production')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139872605-1"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-139872605-1');
</script>

<script>
    var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2020.02 };
    function $buo_f(){
     var e = document.createElement("script");
     e.src = "//browser-update.org/update.min.js";
     document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
</script>

@endenv

</body>

</html>
