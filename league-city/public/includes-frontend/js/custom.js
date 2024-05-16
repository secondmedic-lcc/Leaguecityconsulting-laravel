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
$(".industry-slider").owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    responsive: {
        0: {
            items: 2,
            nav: false,
        },
        767: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
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
            items: 1.5,
            nav: false,
            center: true,
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