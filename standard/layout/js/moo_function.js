document.documentElement.className += " js";

window.addEvent('domready', function() {

    // track retina devices
    if (window.devicePixelRatio >= 2){  
        var cookieValues = {
            hasRetina: true
        };
        Cookie.write('retina', JSON.encode(cookieValues),{duration: 1000});
    }

    // alternative mobile navigation
    if ($('nav-mobile')) {
        $('nav-mobile').addEvent('click', function (e) {
            if ($('nav').hasClass('active')) {
                $('nav').removeClass('active');
            } else {
                $('nav').addClass('active');
            }
        });
    }

});