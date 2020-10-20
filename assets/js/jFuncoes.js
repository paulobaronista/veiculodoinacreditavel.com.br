$(document).ready(function () {

    $('#cookies').show(3000);

    // Check if the user already accepted it
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        return false;
    }

    $(".btn_cookie").click(function () {
        // Save on LocalStorage
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        return false;
    });
});