function redirect(url) {
    try {
        window.onload = window.location.replace(url);
    } catch(e) {
        try {
            window.onload = window.location.assign(url);
        } catch(e) {
            try {
                window.onload = window.location(url);
            } catch(e) {
                console.error(e);
            }
        }
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

