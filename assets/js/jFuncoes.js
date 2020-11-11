$(document).ready(function () {

    $('#cookies').show();
    $('body').css('overflow', 'hidden');

    // Check if the user already accepted it
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        $('body').css('overflow', 'auto');
        return false;
    }

    $(".btn_cookie").click(function () {
        // Save on LocalStorage
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        $('body').css('overflow', 'auto');
        return false;
    });
});