function redirect(url) {
    try {
        window.addEventListener(() => {
            window.location.replace(url)
        });

        window.addEventListener(() => {
            window.location = url
        });
    } catch(e) {
        console.log(e);
    }
}

var recaptchaSuccess = function(response) {
    document.getElementById('submit').disabled = false;
    document.getElementById('submit').autofocus = true;
};

var recaptchaError = function() {
    document.getElementById('submit').disabled = true;
};

let onloadCallback = function() {
    grecaptcha.render('recaptcha', {
        'sitekey' : '6LcEScgUAAAAAIxwvlfw5rbvAuVYdhbbPmChcept',
        'callback' : recaptchaSuccess,
        'expired-callback' : recaptchaError,
        'error-callback' : recaptchaError
    });
};

function redirectToSection(sectionId) {
    window.location.href = sectionId;
}

const bgImg = document.querySelectorAll('.my-bg-img');
bgImg.forEach(el => {
    el.addEventListener('lazybeforeunveil', function(e){
        const bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = `url(${bg})`;
        }
    });
});

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
    const timeSincePageLoad = Math.round(performance.now());

    // Sends the timing event to Google Analytics.
    gtag('event', 'timing_complete', {
        'name': 'load',
        'value': timeSincePageLoad,
        'event_category': 'JS Dependencies'
    });
}

var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,api:2020.02 };
function $buo_f(){
    var e = document.createElement("script");
    e.src = "//browser-update.org/update.min.js";
    document.body.appendChild(e);
}
try {
    document.addEventListener("DOMContentLoaded", $buo_f,false)
}
catch(e){
    window.attachEvent("onload", $buo_f)
}
