$(document).ready(function() {
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdoxaYUAAAAAJx8MEuu-K5-AeStQBO9l8yBPpyq', {action: 'contact'})
            .then(function(token) {
                document.getElementById('submit').disabled = false;
                
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;

            });
    });
});