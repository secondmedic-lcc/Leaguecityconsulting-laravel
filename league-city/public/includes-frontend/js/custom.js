AOS.init();

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

$(".team-slider").owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
    responsive: {
        0: {
            items: 2,
            nav: false,
        },
        400: {
            items: 2,
            nav: false,
        },
        767: {
            items: 3,
        },
        1200: {
            items: 5,
        },
    },
});

$(".services-slider").owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1.5,
            nav: false,
            center: true,
        },
        400: {
            items: 2,
            nav: false,
        },
        767: {
            items: 3,
        },
        1200: {
            items: 5,
        },
    },
});
$(".work-slider").owlCarousel({
    loop: true,
    margin: 15,
    center: true,
    nav: true,
    dots: false,
    responsive: {
        0: {
            margin: 0,
            items: 1,
            center: false,
            nav: false,
        },
        576: {
            margin: 0,
            items: 1,
            center: false,
            nav: false,
        },
        767: {
            items: 1.3,
        },
        1000: {
            items: 1.3,
        },
    },
});


// $(".industry-slider").owlCarousel({
//     loop: false,
//     margin: 0,
//     nav: true,
//     dots: false,
//     responsive: {
//         0: {
//             items: 2,
//             nav: false,
//         },
//         767: {
//             items: 3,
//         },
//         1000: {
//             items: 4,
//         },
//     },


// });





$(document).ready(function () {
    var owl = $('.industry-slider');

    owl.owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        responsive: {
            0: { items: 2, nav: false },
            767: { items: 3 },
            1000: { items: 4 }
        }
    });

    var defaultBg = '{{ asset("includes-frontend/images/healthcarelifescience.webp") }}';
    var lastActiveBox = null;

    $('#industries-section').css('background-image', 'url(' + defaultBg + ')');

    $('.industry-slider').on('mouseenter', '.box', function () {
        var bg = $(this).data('bg');
        if (bg) {
            $('#industries-section').css('background-image', 'url(' + bg + ')');
        }
        $('.box').removeClass('active');
        $(this).addClass('active');
        lastActiveBox = $(this);
    });

    $('.industry-slider').on('mouseleave', '.box', function () {
        if (lastActiveBox) {
            var bg = lastActiveBox.data('bg');
            if (bg) {
                $('#industries-section').css('background-image', 'url(' + bg + ')');
            }
            $('.box').removeClass('active');
            lastActiveBox.addClass('active');
        }
    });

    $('.owl-prev, .owl-next').on('click', function () {
        if (lastActiveBox) {
            var bg = lastActiveBox.data('bg');
            $('#industries-section').css('background-image', 'url(' + bg + ')');
            $('.box').removeClass('active');
            lastActiveBox.addClass('active');
        }
    });
});





$(".standout-slider").owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        767: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
$(".blog-slider").owlCarousel({
    loop: false,
    margin: 15,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        767: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});

$(".campaign-review-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        400: {
            items: 1,
            nav: false,
        },
        767: {
            items: 2,
        },
        1200: {
            items: 4,
        },
    },
});

$(".app-screenshot-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
    responsive: {
        0: {
            items: 1.5,
            nav: false,
            center: true,
        },
        400: {
            items: 2,
            nav: false,
        },
        767: {
            items: 3,
        },
        1200: {
            items: 3,
        },
    },
});

$(".testimonials-slider").owlCarousel({
    loop: true,
    margin: 15,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        767: {
            items: 2,
        },
        1000: {
            items: 2,
        },
        1250: {
            items: 2.5,
        },
    },
});
