/************************************************** AOS SCROLL ANIMATION **********************************/
AOS.init();
window.addEventListener('load', AOS.refresh);

jQuery(function($) {
    'use strict',
    new WOW().init();
});

//-- header fixed JavaScript -->
/**************************************************Header**********************************/

if ($(window).width() >= 992) {
    window.onscroll = function() {
        myFunction();
    };
    var header = document.getElementById('Header');
    var sticky = 300;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    }
}

$(document).ready(function() {
    var headerHeight = $('#Header').height() + 'px';
    $('#main-slider').css('margin-top', headerHeight);
    $('.inner_page').css('margin-top', headerHeight);
});

/**************************************************Header_END**********************************/

/**************************************************DROPDOWN**********************************/

$(document).ready(function() {
    $('.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this)
            .parent()
            .siblings()
            .removeClass('show');
        $(this)
            .parent()
            .toggleClass('show');
    });
});

/**************************************************DROPDOWN_END**********************************/

//< !------scrollup---- - >
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1500) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function() {
        $('html, body').animate({
                scrollTop: 0
            },
            1000
        );
        return false;
    });
});

$('.carousel').swipe({
    swipe: function(
        event,
        direction,
        distance,
        duration,
        fingerCount,
        fingerData
    ) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll: 'vertical'
});

/*************************SLICK******************************/

$(document).ready(function() {
    $('.about_slide').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slide-prev">Previous</button>',
        nextArrow: '<button class="slide-nxt">Next</button>',
        responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 468,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.events_slide').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button class="slide-prev">Previous</button>',
        nextArrow: '<button class="slide-nxt">Next</button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 468,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.testi_slide').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        speed: 2000,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        arrows: false,
        dots: true,
        pauseOnHover: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slide-prev">Previous</button>',
        nextArrow: '<button class="slide-nxt">Next</button>'
    });

    $('.testi_slide2').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button class="slide-prev">Previous</button>',
        nextArrow: '<button class="slide-nxt">Next</button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.profile_slide').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<button class="slide-prev">Previous</button>',
        nextArrow: '<button class="slide-nxt">Next</button>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});

/****************COUNTER*****************/

$('.counter').html('0');
$('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({
        countNum: $this.text()
    }).animate({
        countNum: countTo
    }, {
        duration: 2000,
        easing: 'linear',
        step: function() {
            $this.text(ReplaceNumberWithCommas(this.countNum));
        },
        complete: function() {
            $this.text(ReplaceNumberWithCommas(this.countNum));
            //alert('finished');
        }
    });

    function ReplaceNumberWithCommas(yourNumber) {
        var num = Math.round(yourNumber);
        //Seperates the components of the number
        var n = num.toString().split('.');
        //Comma-fies the first part
        n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        //Combines the two sections
        return n.join('.');
    }
});

/***************** ISOTOPE_GALLERY ******************************/
$(window).ready(function() {
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.portfolioFilter a').click(function() {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});