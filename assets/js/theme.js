jQuery(document).ready(function ($) {
    // Featured Carousel
    var featured_propery = $('.featured-carousel.owl-carousel');

    featured_propery.owlCarousel({
        center: true,
        dots: false,
        items: 4,
        loop: true,
        margin: 40,
        autoWidth: true,
        responsive: {
            600: {
                items: 4
            }
        }
    });

    // Go to the next item
    $('.featured-property-nav .button-left').click(function () {
        featured_propery.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.featured-property-nav .button-right').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        featured_propery.trigger('prev.owl.carousel', [300]);
    })

    // Review Carousel
    $(".review-carousel.owl-carousel").owlCarousel({
        center: true,
        dots: true,
        items: 2,
        loop: true,
        margin: 56,
        autoWidth: true,
        responsive: {
            600: {
                items: 3
            }
        }
    });
})