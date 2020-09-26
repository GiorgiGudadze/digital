$(document).ready(function() {

    $('#nav-icon3').click(function() {
        $(this).toggleClass('open');
        if ($('#nav-icon3').hasClass('open')) {
            $('aside').removeClass('active');
            $('.sidebarCnt').css({ 'transform': 'translateX(0)' });
            $('aside').css('opacity', '0');
            $('.privateHomePic').css({ 'width': 'calc(100% + 300px)', 'transform': 'translateX(-300px)' });

            $('.sideCover').stop().css('display', 'block').animate({
                opacity: '0.5'
            }, 800);
            $('html, body').animate({ scrollTop: 0 }, 500);

        } else {
            $('aside').addClass('active');
            $('.sidebarCnt').css({ 'transform': 'translateX(100%)' });
            $('aside').css('opacity', '1');
            $('.privateHomePic').css({ 'width': '100%', 'transform': 'translateX(0)' });
            $('.sideCover').stop().animate({
                'opacity': '0'
            }, 800, function() {
                $(this).hide();
            });
        }
    });

    function scrollDownContacts() {
        var wholePageHeight = $(document).height();
        $('html, body').animate({ scrollTop: wholePageHeight }, 800);
    }

    $('.contactScroll').on('click', function() {

        scrollDownContacts();
        $('#nav-icon3').removeClass('open');
        $('.sidebarCnt').css({ 'transform': 'translateX(100%)' });
        $('.sideCover').stop().animate({
            'opacity': '0'
        }, 800, function() {
            $(this).hide();
        });

    })
});