$(document).ready(function () {
    // if ($(window).width() > 1024) {
    //     $('.c-banner_mshow').children().remove();
    //     var myFullpage = new fullpage('#fullpage', {
    //         // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff']
    //     });
    // } else {
    //     $('.c-banner_showpc').children().remove();
    //     var myFullpage = new fullpage('#fullpage', {
    //         // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff']
    //     });
    // }

    $(".banner-home-new").owlCarousel({
        autoplay: true, //Set AutoPlay to 3 seconds
        // autoplaySpeed: 1000,
        loop: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        margin: 0,
        smartSpeed: 500,
        items: 1
    });
})
