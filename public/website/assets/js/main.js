"use strict";

var JSTempUtil = {
    //This is a util class only for demo purposes, e.g. an Ajax response for UI demonstration. 
    //Its methods and calls should be replaced when implementing a website.

    getNewItems: function(widgetType){
        
        if(widgetType === 'widget-3'){
            return $(
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign"> '+
                '<a href="#" class="portfolio-item"> '+
                    '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET-Commerce</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+

            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-typo"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET- Doctor</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET-Travel</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET-Staff</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-branding"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET-Revenue</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>');

        } 
        if(widgetType === 'widget-21'){
            return $(
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign"> '+
                '<a href="#" class="portfolio-item"> '+
                    '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>E-Road</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+

            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-typo"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET- MATHS</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>PAY4ME</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>'+
            '<div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-branding"> '+
            '<a href="#" class="portfolio-item"> '+
                '<img src="asset/website/assets/images/portfolio-2.jpg" alt="blog"> '+
                    '<div class="inner-wrapper"> '+
                        '<div class="plus-sign"><span>+</span></div> '+
                        '<h6>GET- APMIS</h6> '+
                        '<p>Web Software</p> '+
                    '</div>'+
                '</a>'+
            '</div>');
        }
    }
}

var JSUtil = {

    dragElementsIn: function(){
        $(".drag-this-left").each(function(i, el) {
            JSUtil.applyDragEffect(el, "drag-left");
        });

        $(".drag-this-right").each(function(i, el) {
            JSUtil.applyDragEffect(el, "drag-right");
        });

        $(".drag-this-up").each(function(i, el) {
            JSUtil.applyDragEffect(el, "drag-up");
        });
    },

    applyDragEffect: function(el, className){
        var el = $(el);
        if (el.visible(true)) {
            el.addClass(className); 
        } 
    },

    checkRisingElements: function(){
        $(".rising-elm:not(.risen)").each(function(i,el){
            JSUtil.riseUp(el);
        });
    },

    riseUp: function(el){
        var $el = $(el);
        var trigger = $el.data("trigger");
        var $w = $(window);
        if(($w.scrollTop() + $w.height() ) > ($el.offset().top + trigger)){
            $(el).addClass('risen');
        }   
    },

    gaugeInitCheck: function(){
        $( ".gauge-container").each(function(i, el){
            var $elm = $(el);
            if($elm.visible(true)){
                var $span = $elm.siblings('span');
                if($span.html() == ""){
                    var total = $elm.data('total');
                    var current = $elm.data('current');
                    var percent = (current/total)*360;
                    $elm.css("transform", "rotate(-" + percent + "deg)");
                    $span.html("0");
                    var val = 0;
                    var id = setInterval(frame, 10);
                    function frame() {
                        if (val >= current) {
                            clearInterval(id);
                            $span.html(current); // just to be sure.
                        } else {
                            val+= current / 200; 
                            $span.html(Math.floor(val));
                        }
                    }
                }
            }
        });
    },

    initMobileMenu: function(){

        $(".side-menu-button").on('click', function(e){
            e.preventDefault();
            $('#mobile-menu').toggleClass('active');
        });


        $("#mobile-menu .arrow").on('click', function(e){
            e.preventDefault();
            var $this = $(e.target);
            var $li = $this.closest('li');
            $li.toggleClass('expanded');
            $li.children('.mobile-submenu').slideToggle();
        });
    }


};

(function ($) {

    JSUtil.dragElementsIn();
    JSUtil.checkRisingElements();
    JSUtil.gaugeInitCheck();
    $( window ).scroll(function() {
        JSUtil.dragElementsIn();
        JSUtil.checkRisingElements();
        JSUtil.gaugeInitCheck();
    });


    $('#page-loader').fadeOut(600);

    $('.navbar-toggler').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('clicked');
        $('.navbar-collapse').toggleClass('collapse');
    });

    $('#page-loader').fadeOut(600);

    //Sliders

    $('.slick-header').slick({
        arrows: false,
        autoplay: true,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.widget-10 .slick-testimonials-carousel').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    'slidesToShow' : 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    'slidesToShow' : 1
                }
            }
        ]
    });

    $('.widget-16 .slick-testimonials-carousel').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    'slidesToShow' : 1
                }
            }
        ]
    });

    $("#back-to-top").on("click", function(e){
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 'ease');
        return false;
    });
    
    //Isotopes

    var $grid1 = $(".widget-9 #portfolio-widget-tab-content");
    $grid1.imagesLoaded(function(){
        $grid1.isotope({ filter: '.default' });
    });

    var $grid2 = $(".widget-3 #portfolio-widget-tab-content");
    $grid2.imagesLoaded(function(){
        $grid2.isotope({ filter: '.default' });
    });

    var $grid3 = $(".widget-22 #team-widget-tab-content");
    $grid3.imagesLoaded(function(){
        $grid3.isotope({ filter: '.default' });
    });

    var $grid4 = $(".portfolio-browse-2 #portfolio-widget-tab-content");
    $grid4.imagesLoaded(function(){
        $grid4.isotope({ filter: '.default' });
    });

    var $grid5 = $('.widget-21 #portfolio-widget-tab-content, .portfolio-browse-1 #portfolio-widget-tab-content');
    $grid5.imagesLoaded(function(){
        $grid5.isotope({
            itemSelector: '.portfolio-item-alt',
            percentPosition: true,
            masonry: {
                columnWidth: '.size-1x1',
                gutter: 6
            }
        });
    });
    
    //Isotope handler

    $(".portfolio-widget-tabs a").on("click", function(e){
        e.preventDefault();
        var $el = $(this);
        $(".portfolio-widget-tabs a").removeClass('active');
        $el.addClass('active');
        var filterValue = $el.data('filter');
        $("#portfolio-widget-tab-content").isotope({ filter: filterValue });
    });

    $(".team-widget-tabs a").on("click", function(e){
        e.preventDefault();
        var $el = $(this);
        $(".team-widget-tabs a").removeClass('active');
        $el.addClass('active');
        var filterValue = $el.data('filter');
        $("#team-widget-tab-content").isotope({ filter: filterValue });
    });

    $(".widget-4 .widget-4-progress .progress-item a").on('click', function(e){
        e.preventDefault();
        var target = $(this).data("target");
        $(".widget-4 .widget-4-progress-item").removeClass("active");
        $("." + target).addClass("active");
    });

    $('.blog-post-slick').slick({
        arrows: true,
        prevArrow: '<i class="fa fa-chevron-left"></i>',
        nextArrow: '<i class="fa fa-chevron-right"></i>',
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.widget-3 #load-more').on('click', function(e){
        e.preventDefault();
        var $newItems = JSTempUtil.getNewItems('widget-3');
        $('.widget-3 #portfolio-widget-tab-content').isotope( 'insert', $newItems );
    });

    $('.widget-21 #load-more').on('click', function(e){
        e.preventDefault();
        var $newItems = JSTempUtil.getNewItems('widget-21');
        $('.widget-21 #portfolio-widget-tab-content').isotope( 'insert', $newItems );
    });

    JSUtil.initMobileMenu();


})(jQuery);