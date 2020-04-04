<script async src="{{ mix('js/all.js') }}"></script>
<script data-ad-client="ca-pub-1577931231143329" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async>
    let bgImg = document.querySelectorAll('#bg-img');
    bgImg.forEach(el => {
        el.addEventListener('lazybeforeunveil', function(e){
            var bg = e.target.getAttribute('data-bg');
            if(bg){
                e.target.style.backgroundImage = 'url(' + bg + ')';
            }
        });
    });
</script>
@env('production')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139872605-1"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-139872605-1', {
        'link_attribution': {
            'cookie_name': '_main',
            'cookie_domain': 'leocarvalho.dev',
            'cookie_expires': 0,
            'levels': 15
        },
        'anonymize_ip': true
    });
    if (window.performance) {
        // Gets the number of milliseconds since page load
        // (and rounds the result since the value must be an integer).
        let timeSincePageLoad = Math.round(performance.now());

        // Sends the timing event to Google Analytics.
        gtag('event', 'timing_complete', {
            'name': 'load',
            'value': timeSincePageLoad,
            'event_category': 'JS Dependencies'
        });
    }
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
