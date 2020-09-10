const recaptchaSuccess = response => {
    document.getElementById('submit').disabled = false;
    document.getElementById('submit').autofocus = true;
};

const recaptchaError = () => {
    document.getElementById('submit').disabled = true;
};

const onloadCallback = () => {
    grecaptcha.render('recaptcha', {
        'sitekey' : '6LcEScgUAAAAAIxwvlfw5rbvAuVYdhbbPmChcept',
        'callback' : recaptchaSuccess,
        'expired-callback' : recaptchaError,
        'error-callback' : recaptchaError
    });
};