(function ($) {
    "use strict";
    $(document).on("ready", function () {
        /*==============================================================================
              Header Sticky JS
          ===============================================================================*/
        var activeSticky = $("#active-sticky"),
            winDow = $(window);
        winDow.on("scroll", function () {
            var scroll = $(window).scrollTop(),
                isSticky = activeSticky;
            if (scroll < 50) {
                isSticky.removeClass("is-sticky");
            } else {
                isSticky.addClass("is-sticky");
            }
        });

        /*=============================================================================
                Nice Select JS
            ===============================================================================*/
        $("select").niceSelect();

        /*==============================================================================
              Wow JS
          ================================================================================*/
        var window_width = $(window).width();
        if (window_width > 767) {
            new WOW().init();
        }

        /*==============================================================================
              Pricing Card Slider JS
          ================================================================================*/
        $(".hero-slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 500,
            merge: true,
            nav: false,
            dots: true,
            margin: 24,
        });
        /*==============================================================================
              Client Slider JS
          ================================================================================*/
        $(".valuable-clients-slider").owlCarousel({
            items: 5,
            autoplay: true,
            loop: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 500,
            merge: true,
            nav: false,
            dots: false,
            margin: 30,
            responsive: {
                300: {
                    items: 2,
                },
                480: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1170: {
                    items: 5,
                },
            },
        });

        /*==============================================================================
            Show More Item JS
        ================================================================================*/
        $(".pricing-home-showmore-box").showMoreItems({
            startNum: 3,
            afterNum: 3,
            moreText: "Load more",
            noMoreText: "No more",
        });
        // $(".pricing-corporate-showmore-box").showMoreItems({
        //     startNum: 3,
        //     afterNum: 3,
        //     moreText: "Load more",
        //     noMoreText: "No more",
        // });
        $(".product-showmore-box").showMoreItems({
            startNum: 4,
            afterNum: 8,
            moreText: "Load more",
            noMoreText: "No more",
        });

        /*==============================================================================
              Testimonial Slider JS
          ================================================================================*/
        $(".testimonial-slider-inner").owlCarousel({
            items: 3,
            autoplay: true,
            loop: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 500,
            merge: true,
            nav: true,
            navText: [
                '<i class="fi-rr-arrow-left aria-hidden="true"></i>',
                '<i class="fi-rr-arrow-right" aria-hidden="true"></i>',
            ],
            dots: false,
            margin: 30,
            responsive: {
                300: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1170: {
                    items: 3,
                },
            },
        });
    });

    /*==============================================================================
            Preloader JS
      ================================================================================*/
    $(window).on("load", function (event) {
        $("#preloader").delay(800).fadeOut(500);
    });
})(jQuery);
