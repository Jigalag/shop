/**
 * Created by Jigalag-StairwaySoft on 26.01.2015.
 */

$(document).ready(function(){
    $('#fullpage').fullpage({
        anchors: ['firstPage', 'secondPage'],
        scrollOverflow: true
    });

    $('.promo-block').each(function() {
        $(this).css('margin-left', '-'+this.clientWidth / 2+'px');
        $(this).css('margin-left', '-'+this.clientWidth / 2+'px');
    });
    $('.cursor, .shop-now').on('click', function() {
        var height_header = $('.header').height();
        $('body,html').animate({
            scrollTop: height_header
        }, 500);
        return false;
    });
});
