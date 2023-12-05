new WOW().init();
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
wow.init();


// All Sliader
$(document).ready(function() {
    "use strict";


    // Top Slider
    $(".home-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        video: true,
        responsiveClass: true
    });

    // Products Slider 
    $(".products-slider").owlCarousel({
        nav: true,
        loop: false,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        dotsData: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            1000: {
                items: 3
            }
        }
    });

    // News Slider 
    $(".news-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
        dots: true,
        dotsData: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        verticalSwiping: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    vertical: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                    verticalSwiping: true
                }
            }
        ]
    });


    //Nav
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".sticky").addClass("active");
        } else {
            $(".sticky").removeClass("active");
        }
    });

    // Mobile Menu
    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box');

        var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });

        $('.mobile-menu .navigation li a').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });

        $('.head-top .nav-head ul li a').on('click', function(event) {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().toggleClass('active');
        });

    }

    //Header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function() {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function() {
            $('body').removeClass('search-active');
        });
    }

    (function($) {

        // Reverse
        // =============================================
        $.fn.reverse = [].reverse;

        // jQuery Extended Family Selectors
        // =============================================
        $.fn.cousins = function(filter) {
            return $(this).parent().siblings().children(filter);
        };

        $.fn.piblings = function(filter) {
            return $(this).parent().siblings(filter);
        };

        $.fn.niblings = function(filter) {
            return $(this).siblings().children(filter);
        };

        // Update
        // =============================================
        $.fn.update = function() {
            return $(this);
        };

        // Dropdown
        // =============================================
        $.fn.dropdown = function(options) {

            // Store object
            var $this = $(this);

            // Settings
            var settings = $.extend({
                className: 'toggled',
            }, options);

            // Simplify variable names
            var className = settings.className;

            // List selectors
            var $ul = $this.find('ul'),
                $li = $this.find('li'),
                $a = $this.find('a');

            // Menu selectors
            var $drawers = $a.next($ul), // All unordered lists after anchors are drawers
                $buttons = $drawers.prev($a), // All anchors previous to drawers are buttons
                $links = $a.not($buttons); // All anchors that are not buttons are links

            // Toggle menu on-click
            $buttons.on('click', function() {
                var $button = $(this),
                    $drawer = $button.next($drawers),
                    $piblingDrawers = $button.piblings($drawers);

                // Toggle button and drawer
                $button.toggleClass(className);
                $drawer.toggleClass(className).css('height', '');

                // Reset children
                $drawer.find($buttons).removeClass(className);
                $drawer.find($drawers).removeClass(className).css('height', '');

                // Reset cousins
                $piblingDrawers.find($buttons).removeClass(className);
                $piblingDrawers.find($drawers).removeClass(className).css('height', '');

                // Animate height auto
                $drawers.update().reverse().each(function() {
                    var $drawer = $(this);
                    if ($drawer.hasClass(className)) {
                        var $clone = $drawer.clone().css('display', 'none').appendTo($drawer.parent()),
                            height = $clone.css('height', 'auto').height() + 'px';
                        $clone.remove();
                        $drawer.css('height', '').css('height', height);
                    } else {
                        $drawer.css('height', '');
                    }
                });
            });

            // Close menu
            function closeMenu() {
                $buttons.removeClass(className);
                $drawers.removeClass(className).css('height', '');
            }

            // Close menu after link is clicked
            $links.click(function() {
                closeMenu();
            });

            // Close menu when off-click and focus-in
            $(document).on('click focusin', function(event) {
                if (!$(event.target).closest($buttons.parent()).length) {
                    closeMenu();
                }
            });
        };
    })(jQuery);

    $('.mobile-menu').dropdown();

    // FancyBox
    $('[data-fancybox="gallaryPhoto"]').fancybox();
    $('[data-fancybox="gallaryVideo"]').fancybox();
    $('[data-fancybox]').fancybox();
    /* --------------------------------------------
         Select
        --------------------------------------------- */
    $('select').niceSelect();

    // Home Slider 
    $(".test-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
    });

});


// File
'use strict';
(function(document, window, index) {
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function(input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function(e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                label.querySelector('span').innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener('focus', function() { input.classList.add('has-focus'); });
        input.addEventListener('blur', function() { input.classList.remove('has-focus'); });
    });
}(document, window, 0));

var loadFile = function(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};