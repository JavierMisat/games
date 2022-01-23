$(function() {
    // Registration form
    $('.signup-form').ajaxForm({
        url: Ajaxrequest() + '?t=register',
        beforeSend: function() {
            signup_form = $('.signup-form');
            signup_button = signup_form.find('.submit-btn');
            signup_button.attr('disabled', true);
        },
        success: function(data) {
            if (data.status == 200) {
                window.location = data.redirect_url;
            } else {
                signup_button.attr('disabled', false);
                Toast.error(data.error_message);
            }
        }
    });

    // Login form
    $('.signin-form').ajaxForm({
        url: Ajaxrequest() + '?t=login',
        beforeSend: function() {
            signup_form = $('.signin-form');
            signup_button = signup_form.find('.submit-btn');
            signup_button.attr('disabled', true);
        },
        success: function(data) {
            if (data.status == 200) {
                window.location = data.redirect_url;
            } else {
                signup_button.attr('disabled', false);
                Toast.error(data.error_message);
            }  
        }
    });

    // Secure login form
    $('.securelogin-form').ajaxForm({
        url: Ajaxrequest() + '?t=login&a=secure_idlogin',
        beforeSend: function() {
            signup_form = $('.securelogin-form');
            signup_button = signup_form.find('.submit-btn');
            signup_button.attr('disabled', true);
        }, 
        success: function(data) {
            if (data.status == 200) {
                window.location = data.redirect_url;
            } else {
                signup_button.attr('disabled', false);
                Toast.error(data.error_message);
            } 
        }
    });
});