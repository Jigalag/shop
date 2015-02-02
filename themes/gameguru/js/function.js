/**
 * Created by Jigalag-StairwaySoft on 26.01.2015.
 */

$(document).ready(function(){
    $('.promo-block').each(function() {
        $(this).css('margin-left', '-'+this.clientWidth / 2+'px');
        console.log(this.clientWidth, this.clientWidth / 2);
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
