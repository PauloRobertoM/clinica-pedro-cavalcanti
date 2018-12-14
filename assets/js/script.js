(function($, window) {
    $('#owl-servicos').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
    $('#owl-unidades').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 0,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
})(jQuery, window);