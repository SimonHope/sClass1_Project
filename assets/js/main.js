$( window ).on('scroll', function(){
    var scrollTop = $(this).scrollTop()
    var score = '15px'
    if (scrollTop > 1) {
        score = '5px 15px'
    }
    $('#navbar').css('padding', score)
});

$('.to-top').click(function (){
    $('html, body').animate({scrollTop: '0px'}, 800)
})