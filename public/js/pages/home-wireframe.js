// draw zing-scheme section's ring 
var c = document.getElementById("room-icon-circular");
var cxt = c.getContext("2d");
cxt.beginPath();
cxt.arc(110, 110, 90, 0, 2 * Math.PI);
cxt.strokeStyle = '#ffffff';
cxt.lineWidth = '3'
cxt.stroke();
cxt.closePath();

// icon-eye animation
$('#room-icon-circular').hover(function() {
    $('#room-icon-eye').addClass('animated pulse');
    $('#room-icon-circular').removeClass('opacity-80');
    $('#room').removeClass('opacity100');
    $('#room').addClass('opacity0');
}, function() {
    $('#room-icon-eye').removeClass('animated pulse');
    $('#room').removeClass('opacity0');
    $('#room').addClass('opacity100');
});


// click icon-eye switch pictures
$('#room-icon-eye').click(function() {
    $('#room').removeClass('opacity100');
    $('#room').addClass('opacity0');
    $('#room-icon-circular').detach();
    $('#room-icon-eye').detach();
    $('.room-text').detach();
    $('#room-scenograph').addClass('opacity0');
    $('#room-line').addClass('opacity0');
    $('#room-line-helf').addClass('opacity100');
    $('#room-button-red').addClass('red-button-appear');
    $('#room-button-green').addClass('green-button-appear');
    $('#init-house').addClass('opacity0 z-index-11');
})


// tow buttons hover animation
$('#room-button-red').hover(function() {
    $(this).removeClass('red-button-appear');
    $(this).addClass('animated pulse z-index-10');
}, function() {
    $(this).removeClass('animated pulse');
});

$('#room-button-green').hover(function() {
    $(this).removeClass('green-button-appear');
    $(this).addClass('animated pulse z-index-10');
}, function() {
    $(this).removeClass('animated pulse');
});


// click '普通方案' button then switch pictures
$('#room-button-red').click(function() {
    $('#init-house').removeClass('opacity0');
    $('#init-house').addClass('opacity100 animated pulse');
    $('#init-house').click(function(){
        // code
    });
    $('#room-button-red').removeClass('animated pulse');
    $('#room-button-red').addClass('img-fade');
    $('#room-line-helf').addClass('img-fade');
    $('#room-scenograph').removeClass('opacity0');
    $('#room-scenograph').addClass('opacity100');
    $('#room-line').addClass('opacity0 z-index-9');
    // remove previous animation
    $('#room-button-green').removeClass('green-button-appear')
    // add  fade animation
    $('#room-button-green').addClass('img-fade animated pulse');
});
// move mouse ,singe button appear
$('#room-line').hover(function(){
    $('#room-button-green-alone').removeClass('opacity-0');
    $('#room-button-green-alone').addClass('animated pulse z-index-10');
});
// mousedown animation
$('#room-button-green-alone').mousedown(function(){
    $('#room-line').removeClass('opcaity0');
    $('#room-line').addClass('opacity100');
}).mouseup(function() {
    $('#room-line').removeClass('opacity100');
    $('#room-line').addClass('opcaity0');
});


// click 'zingpower' button then switch pictures
$('#room-button-green').click(function() {
    $('#init-house').removeClass('opacity0');
    $('#init-house').addClass('opacity100 animated pulse');
    $('#init-house').click(function(){
        $('#room').removeClass('opacity100');
        $('#room').addClass('opacity0');
        $('#room-scenograph').addClass('opacity0');
        $('#room-button-red').addClass('red-button-appear');
        $('#room-button-green').addClass('green-button-appear');
        $(this).addClass('opacity0');
    })
    $('#room-button-red').removeClass('animated pulse red-button-appear');
    $('#room-button-red').addClass('opcaity0');
    $('#room-line-helf').addClass('img-fade');
    $('#room-scenograph').removeClass('opacity0');
    $('#room-scenograph').addClass('opacity100 z-index-9');
    $('#room-line').addClass('img-fade');
    // remove previous animation
    $('#room-button-green').removeClass('green-button-appear')
    // add  fade animation
    $('#room-button-green').addClass('img-fade');
});
// move mouse ,singe button appear
$('#room-scenograph').hover(function(){
    $('#room-button-red-alone').removeClass('opacity-0');
    $('#room-button-red-alone').addClass('animated pulse z-index-11');
    // unbind "$('#room-line').hover" 
    // $('#room-line').unbind(mouseenter).unbind(mouseleave);
});
// mousedown animation
$('#room-button-red-alone').mousedown(function(){
    $('#room-line').removeClass('img-fade opacity100 roomline-fade');
    $('#room-line').addClass('opacity100 z-index-11');
}).mouseup(function() {
    $('#room-line').removeClass('roomline-appear z-index-11');
    $('#room-line').addClass('roomline-fade');
});
