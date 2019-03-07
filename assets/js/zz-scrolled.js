jQuery(function($) {
    'use strict';

    if( $(window).width() > 520 ){
        $(window).on('scroll', function() {
            if( $(window).scrollTop() > 31 ){
                $('body').addClass('scrolled');
            } else{
                $('body').removeClass('scrolled');
            }
        });
    } else{
        $(window).on('scroll', function() {
            if( $(window).scrollTop() > 0 ){
                $('body').addClass('scrolled');
            } else{
                $('body').removeClass('scrolled');
            }
        });
    }
});