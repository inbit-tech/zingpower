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
    $('#room').addClass('img-fade');
}, function() {
    $('#room-icon-eye').removeClass('animated pulse');
});


// click icon-eye switch pictures
$('#room-icon-eye').click(function() {
    $('#room-icon-circular').detach();
    $('#room-icon-eye').detach();
    $('.room-text').detach();
    $('#room-scenograph').addClass('img-fade');
    $('#room-line').addClass('img-fade');
    $('#room-button-red').addClass('red-button-appear');
    $('#room-button-green').addClass('green-button-appear');
})


// tow buttons hover animation
$('#room-button-red').hover(function() {
    $(this).removeClass('red-button-appear');
    $(this).addClass('animated pulse z-index-10');
}, function() {});

$('#room-button-green').hover(function() {
    $(this).removeClass('green-button-appear');
    $(this).addClass('animated pulse z-index-10');
}, function() {});


// click '普通方案' button then switch pictures
$('#room-button-red').click(function() {
    $('#room-button-red').removeClass('animated pulse');
    $('#room-button-red').addClass('img-fade');
    $('#room-line-helf').addClass('img-fade');
    $('#room-scenograph').addClass('img-appear');
    $('#room-line').addClass('img-appear z-index-9');
    // remove previous animation
    $('#room-button-green').removeClass('green-button-appear')
    // add  fade animation
    $('#room-button-green').addClass('img-fade');
});
// move mouse ,singe button appear
$('#room-line').hover(function(){
    $('#room-button-green-alone').removeClass('opacity-0');
    $('#room-button-green-alone').addClass('green-button-alone-appear');
});
// mousedown animation
$('#room-button-green-alone').mousedown(function(){
    $('#room-line').removeClass('roomline-appear');
    $('#room-line').addClass('roomline-fade');
}).mouseup(function() {
    $('#room-line').removeClass('roomline-fade');
    $('#room-line').addClass('roomline-appear');
});


// click 'zingpower' button then switch pictures
$('#room-button-green').click(function() {
    $('#room-button-red').removeClass('animated pulse red-button-appear');
    $('#room-button-red').addClass('img-fade');
    $('#room-line-helf').addClass('img-fade');
    $('#room-scenograph').addClass('img-appear z-index-9');
    $('#room-line').addClass('img-fade');
    // remove previous animation
    $('#room-button-green').removeClass('green-button-appear')
    // add  fade animation
    $('#room-button-green').addClass('img-fade');
});
// move mouse ,singe button appear
$('#room-scenograph').hover(function(){
    $('#room-button-red-alone').removeClass('opacity-0');
    $('#room-button-red-alone').addClass('red-button-alone-appear z-index-11');
    // unbind "$('#room-line').hover" 
    $('#room-line').unbind(mouseenter).unbind(mouseleave);
});
// mousedown animation
$('#room-button-red-alone').mousedown(function(){
    $('#room-line').addClass('roomline-appear z-index-11');
    $('#room-line').removeClass('roomline-fade');
}).mouseup(function() {
    $('#room-line').removeClass('roomline-appear z-index-11');
    $('#room-line').addClass('roomline-fade');
});