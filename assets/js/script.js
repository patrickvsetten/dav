jQuery(function($) {
    'use strict';

    // Toggle hamburger menu
    $('.navbar__hamburger').on('click', function() {
        $("body").toggleClass("nav-open");
        $("html").toggleClass("not-scrollable");
        $('.navbar__hamburger-bar').toggleClass('navbar__hamburger-bar--animate');
    })





    // CF7 loader fix
    $('.ajax-loader').append('<div class="loading"></div>');

    // Submenus
    $('.navbar--fixed-top .container-fluid .row .menu > li > .sub-menu').wrapInner('<div class="submenu-wrapper"><div class="container-fluid"></div></div>');

    $('.mobile-menu .mobile-menu__wrapper .menu-item-has-children').append('<span class="more"><i></i><i></i><i></i></span>');
    $('<li class="back"><a><svg class="icon"><use xlink:href="#icon-arrow"/></svg>Terug</a></li>').insertBefore('.mobile-menu .mobile-menu__wrapper .menu-item-has-children .sub-menu li:first-child');

    $('.mobile-menu .mobile-menu__wrapper .more').click(function(){
        $('html').addClass('sub-menu-active');
        $(this).closest('li').addClass('children-active');
        $(this).closest('ul.sub-menu').addClass('submenu-active');
    });

    $('.mobile-menu .mobile-menu__wrapper .back').click(function(){
        $('html').removeClass('sub-menu-active');
        $(this).closest('li.children-active').removeClass('children-active');
        $(this).closest('ul.sub-menu.submenu-active').removeClass('submenu-active');
    });

    $('.mobile-menu .mobile-menu__wrapper .sub-menu .sub-menu .back').click(function(){
        $('html').addClass('sub-menu-active');
    });

    // Carousel
    var countCells = $('.carousel-cell').length;
    if( countCells > 1 ){
        var $carousel = $('.carousel').flickity({
            draggable: true,
            pageDots: true,
            prevNextButtons: false,
            cellAlign: 'left',
        });
        $carousel.flickity('reloadCells');
    };

    // Accordion
    var faq = $('.faq__section');
    if( faq.length > 0 ){
        function close_accordion_section() {
            $('.accordion .title a').removeClass('open');
            $('.accordion .content').slideUp(300).removeClass('active');
            $('.accordion').removeClass('active');
        };

        $('.title a').click(function(e) {
            var currentAttrValue = $(this).attr('href');

            if( $(e.target).is('.open') ){
                close_accordion_section();
            } else{
                close_accordion_section();
                $(this).addClass('open');
                $(this).parents('.accordion').addClass('active');
                $(this).addClass('open');
                $('.accordion ' + currentAttrValue).slideDown(300).addClass('active');
            };

            e.preventDefault();
        });
    };

    // Flickity
    $('.partners__carousel').flickity({
        watchCSS: false,
        groupCells: 5,
        cellAlign: 'center',
        contain: true,
        pageDots: false,
        prevNextButtons: false,
        autoPlay: 6000,
        wrapAround: true,
    });

    if ($(window).width() < 767) {
        $('.partners__carousel').flickity({
            watchCSS: false,
            groupCells: 2,
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
            autoPlay: 6000,
            wrapAround: true,
        });
    }

    // DATEPICKER
    $('input.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        weekStart: 1,
        language: 'nl-NL',
        todayHighlight: true,
    });

    // iOS bugfix!
    $(document).on('touchstart', function(e) {
        var ele = $(e.target);
        if (!ele.hasClass('ui-datepicker-next')&&!ele.hasClass('ui-datepicker-prev')&&!ele.hasClass("hasDatepicker") && !ele.hasClass("ui-datepicker") && !ele.hasClass("ui-icon") && $(ele).closest(".ui-datepicker").length == 0){
            $(".hasDatepicker").datepicker("hide");
            $('input').blur();
        }
    });

});
