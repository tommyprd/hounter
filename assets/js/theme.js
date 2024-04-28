jQuery(document).ready(function ($) {
    // Review Carousel
    $(".owl-carousel").owlCarousel({
        center: true,
        dots: true,
        items: 2,
        loop: true,
        margin: 56,
        autoWidth:true,
        responsive: {
            600: {
                items: 3
            }
        }
    });
})