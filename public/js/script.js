$(document).ready(function(){
    $(".owl-carousel1").owlCarousel({
        autoplay:false,
        loop: true,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            680: {
                items: 2,
                nav: false,
                loop: false
            },
            1000: {
                items: 3,
                nav: true
            }
        }
    });
});
