//Ckeck the scroll position
$(window).on("scroll", function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 50) {
      $('#resume-header').stop().animate({
            'margin-top': '4em !important'
        }, 200);
        $('#headerInfo').fadeOut();
        $('#headerTop').stop().animate({
            'height': '51px',
            'padding-top': '0.1em',
            'padding-bottom': '0.5em',
            'margin-top': '0em'
        }, 200);
        $('#containerHeader').stop().animate({
            'margin-top': '-1em'
        }, 200);
        $('#logo').stop().animate({
            'with': '20px',
            'height': '70px',
            'margin-top': '-0.9em',
            'padding-top': '1em'
        });
    } else {
        $('#headerInfo').fadeIn();
        if ($(window).width() < 800) {
            $('#logo').stop().animate({
                'with': '40px',
                'height': '90px',
                'margin-top': '-0.2em',
                'padding-top': '0em'
            });
        } else {
            $('#logo').stop().animate({
                'with': '40px',
                'height': '100px',
                'margin-top': '-1em',
                'padding-top': '0em'
            });
        }
        $('#headerTop').stop().animate({
            'height': '72px',
            'padding-top': '0em',
            'padding-bottom': '0em',
            'margin-top': '0em'
        }, 200);
        $('#containerHeader').stop().animate({
            'margin-top': '-0.5em'
        }, 200);
    }
});