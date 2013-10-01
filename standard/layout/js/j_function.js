document.documentElement.className += " js";

$(document).ready(function() {

    // alternative mobile navigation
    if ($('#nav-mobile')) {
        $('#nav-mobile').bind('click', function (e) {
            if ($('#nav').hasClass('active')) {
                $('#nav').removeClass('active');
            } else {
                $('#nav').addClass('active');
            }
        });
    }

});