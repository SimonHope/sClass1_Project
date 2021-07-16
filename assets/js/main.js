$( window ).on('scroll', function(){
    var scrollTop = $(this).scrollTop()
    var score = '15px'
    if (scrollTop > 1) {
        score = '5px 15px'
    }
    $('#navbar').css('padding', score)
});

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav:false,
        dot: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
  });