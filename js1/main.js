;(function () {

    'use strict';

    var carousels = function() {
        $(".owl-carousel1").owlCarousel(
            {
                loop:true,
                center: true,
                margin:0,
                responsiveClass:true,
                nav:false,
                autoplay:true,
                rewind: false,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        loop:true
                    },
                    600:{
                        items:1,
                        nav:false,
                        loop:true
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true
                    }
                }
            }
        );

            $(".owl-carousel3").owlCarousel(
                {
                    
                    loop:true,
                    center: true,
                    margin:0,
                    responsiveClass:true,
                    nav:false,
                    autoplay:true,
                    rewind: false,
                    autoplayTimeout:800,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:1,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:true,
                            loop:true
                        }
                    }
                }
            );

        $(".owl-carousel2").owlCarousel(
            {
                loop:true,
                autoplay:true,
                autoplayTimeout:1000,
                center: false,
                margin:0,
                responsiveClass:true,
                nav:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true
                    }
                }
            }
        );



        $(".owl-carousel4").owlCarousel(
            {
                
                // loop:true,
                // center: true,
                margin:0,
                responsiveClass:true,
                nav:false,
                // autoplay:true,
                rewind: false,
                // autoplayTimeout:800,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true
                    }
                }
            }
        );

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })


    }



    // var owl = $('.owl-carousel');
    // owl.owlCarousel({
    //     items:4,
    //     // loop:true,
    //     margin:10,
    //     // autoplay:true,
    //     // autoplayTimeout:1000,
    //     // autoplayHoverPause:true
    // });
    // $('.play').on('click',function(){
    //     owl.trigger('play.owl.autoplay',[1000])
    // })
    // $('.stop').on('click',function(){
    //     owl.trigger('stop.owl.autoplay')
    // })



    

    // svg responsive in mobile mode
    var checkPosition = function() {
        if ($(window).width() < 767) {
            $("#bg-services").attr("viewBox", "0 0 1050 800");

        }
    };

    (function($) {
        carousels();
        checkPosition();
    })(jQuery);


}());

// menu toggle button
function myFunction(x) {
    x.classList.toggle("change");
}
