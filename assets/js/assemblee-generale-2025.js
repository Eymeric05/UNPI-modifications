// JavaScript pour la page Assemblée Générale 2025

document.addEventListener('DOMContentLoaded', function() {
    // Initialisation du reCAPTCHA
    if (typeof grecaptcha !== 'undefined') {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41', {
                action: 'submit'
            }).then(function(token) {
                var response = document.getElementById('token_response');
                if (response) {
                    response.value = token;
                }
            });
        });
    }
});
