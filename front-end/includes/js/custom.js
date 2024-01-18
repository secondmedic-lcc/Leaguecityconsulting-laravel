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
  loop: true,
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
