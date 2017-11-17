// icon-eye animation
$('#room-icon-circular').hover(function() {
    $('#room-icon-eye').addClass('animated bounceIn')
}, function() {
    $('#room-icon-eye').removeClass('animated bounceIn')
});


// click icon-eye switch pictures
$('#room-icon-eye').click(function() {
    $('#room-icon-circular').detach();
    $('#room-icon-eye').detach();
    $('.room-text').detach();
    $('#room').attr("src", "/img/homepage/room-line-helf.png");
    $('#room-button-red').attr("src", "/img/homepage/room-button-red.png");
    $('#room-button-green').attr("src", "/img/homepage/room-button-green.png");
})


// tow buttons hover animation
$('#room-button-red').hover(function() {
    $(this).addClass('animated bounceIn')
}, function() {
    $(this).removeClass('animated bounceIn')
});

$('#room-button-green').hover(function() {
    $(this).addClass('animated bounceIn')
}, function() {
    $(this).removeClass('animated bounceIn')
});


// click 'zingpower' button then switch pictures
$('#room-button-green').click(function() {
    $('#room-button-red').detach()
    $('#room-button-green').detach()
    $('#room-button-green-alone').detach()
    $('#room').attr("src", "/img/homepage/room-scenograph.jpg");
    $('#room-button-red-alone').attr("src", "/img/homepage/room-button-red.png");
});

$('#room-button-red-alone').click(function(){
    $('#room-line').attr("src","/img/homepage/room-line.png");
    $('#room-button-red-alone').detach()
})


// click '普通方案' button then switch pictures
$('#room-button-red').click(function() {
    $('#room-button-green').detach()
    $('#room-button-red').detach()
    $('#room-button-red-alone').detach()
    $('#room').attr("src", "/img/homepage/room-scenograph.jpg");
    $('#room-line').attr("src", "/img/homepage/room-line.png");
    $('#room-button-green-alone').attr("src", "/img/homepage/room-button-green.png");
});

$('#room-button-green-alone').click(function(){
    $('#room-button-green-alone').detach()
    $('#room-line').detach()
});

