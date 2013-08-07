document.documentElement.className += " js";

window.addEvent('domready', function() {

    // track retina devices
    if (window.devicePixelRatio >= 2){  
        var cookieValues = {
            hasRetina: true
        };
        Cookie.write('retina', JSON.encode(cookieValues),{duration: 1000});
    }

    // center pagination
    if ($('pagination'))  {
        var paginationWidth = $('pagination').getStyle('width').toInt();
        var liWidth = 0;
        $each($$('#pagination li'), function(item){
            liWidth += item.getStyle('width').toInt() + 10;
        });
        $('pagination').setStyle('padding-left', (paginationWidth - 10 - liWidth)/2);
    }

    // dropdown for ie6
    if ($('nav')) {
        $$('#nav li').addEvents({
            mouseenter: function() {
                $(this).getChildren('ul').addClass('hover');
            },
            mouseleave: function() {
                $(this).getChildren('ul').removeClass('hover');
            }
        });
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