/*! newpoc - v1.0.0 - 2017-07-13 */'use strict';

console.log('nuevecubica pocs main scripts');


jQuery(document).ready(function ($) {
    /**
     * Opens New User Account Form and closes Login Form
     */

    $("#newAccountButton").click(function () {
        console.log('go to new account');
        $('#formLogin').fadeOut("slow", function () {
            $('#formNewUser').fadeIn();
        });
    });
    /**
     * Opens Login Form and closes New User Account Form
     */

    $("#toLoginForm").click(function () {
        console.log('go to login form');
        $('#formNewUser').fadeOut("slow", function () {
            $('#formLogin').fadeIn();
        });
    });
    /**
     * Toogle classes - password visibility -
     * @param elm -this-
     * $("[id^=jander]")
     *lock-password
     * check later refactoring
     */

    $("[id^=lock-password]").click(function () {

        var lockIcon = jQuery('#' + this.id);
        var inputPass = document.getElementById('userPasswordA');
        var inputPassB = document.getElementById('userPasswordB');
        console.log(lockIcon);

        if(lockIcon.attr('id') == 'lock-password-login' ){

            if (inputPass.type === "password") {
                inputPass.type = "text";
                lockIcon.toggleClass('fa-lock fa-unlock');
            } else {
                inputPass.type = "password";
                lockIcon.toggleClass('fa-unlock fa-lock');
            }
        }
        if (lockIcon.attr('id') == 'lock-password-newuser' ){
            if (inputPassB.type === "password") {
                inputPassB.type = "text";
                lockIcon.toggleClass('fa-lock fa-unlock');
            } else {
                inputPassB.type = "password";
                lockIcon.toggleClass('fa-unlock fa-lock');
            }
        }

    });
// text for future animations...
    function invalidLogin(){
        alert('vaya vaya vaya');
        console.log('invalid Login.....');
        jQuery('#formLogin').addClass('invalid_pass');
    }
});