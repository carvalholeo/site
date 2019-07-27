$(document).ready(function() {
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdoxaYUAAAAAJx8MEuu-K5-AeStQBO9l8yBPpyq', {action: 'contact'}).then(function(token) {
            var submitButton = document.getElementById('submit');
            submitButton.disabled = false;
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            $.ajax({
                type: 'OPTIONS',
                url: apiRoute(),
                context: this,
                data: plano,
                success: function (data) {
                    
                },
                error: function (error) {

                }
            });

        });
    });
});