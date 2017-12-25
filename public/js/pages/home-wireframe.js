// draw zing-scheme section's ring 
var c = document.getElementById("room-icon-circular");
var cxt = c.getContext("2d");
cxt.beginPath();
cxt.arc(110, 110, 90, 0, 2 * Math.PI);
cxt.strokeStyle = '#ffffff';
cxt.lineWidth = '3'
cxt.stroke();
cxt.closePath();

// when mouse inter circular，trigger icon-eye animation, room image fade and scenograph image appear 
$('#room-icon-circular').hover(function() {
    $('#room-icon-eye').addClass('animated pulse');
    $('#room').removeClass('opacity100');
    $('#room').addClass('opacity0');
    $('#room-scenograph').removeClass('opacity0');
    $('#room-scenograph').addClass('opacity100');
}, function() {
    $('#room-icon-eye').removeClass('animated pulse');
    $('#room').removeClass('opacity0');
    $('#room').addClass('opacity100');
    $('#room-scenograph').removeClass('opacity100')
    $('#room-scenograph').addClass('opacity0');
});


// click icon-eye switch pictures
$('#room-icon-eye').click(function() {
    $('#room').removeClass('opacity100');
    $('#room').addClass('opacity0');
    $('#room-icon-circular').detach();
    $('#room-icon-eye').detach();
    $('.room-text').detach();
    $('#room-line-helf').removeClass('opacity0');
    $('#room-line-helf').addClass('opacity100');
    $('#room-button-red').removeClass('opacity0');
    $('#room-button-red').addClass('red-button-appear');
    $('#room-button-red').addClass('opacity100');
    $('#room-button-green').removeClass('opacity0');
    $('#room-button-green').addClass('green-button-appear');
    $('#room-button-green').addClass('opacity100');
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
    $('#init-house').addClass('opacity100 z-index-10');
    // in '普通方案' click init-house view layer callback secound view layer
    $('#init-house').click(function() {
        // make third view layer back init state
        $('#room-scenograph').removeClass('opacity100');
        $('#room-scenograph').addClass('opacity0');
        $('#room-line').removeClass('opacity100 z-index-9');
        $('#room-line').addClass('opacity0');
        $(this).removeClass('opacity100 animated pulse z-index-10');
        $(this).addClass('opacity0');
        $('#room-button-green-alone').removeClass('opacity100 animated pulse z-index-10');
        $('#room-button-green-alone').addClass('opacity0');
        $('#room-button-red-alone').removeClass('opacity100 animated pulse z-index-10');
        $('#room-button-red-alone').addClass('opacity0');
        // make secound view layer appear
        $('#room-line-helf').removeClass('opacity0');
        $('#room-line-helf').addClass('opacity100');
        $('#room-button-red').removeClass('opacity0');
        $('#room-button-red').addClass('opacity100 z-index-10 red-button-appear');
        $('#room-button-green').removeClass('opacity0');
        $('#room-button-green').addClass('opacity100 z-index-10 green-button-appear');
    });
    // third view layer -> green-button-alone appear ,room-line and room-scenograph appear
    $('#room-button-red').removeClass('opacity100 z-index-10');
    $('#room-button-red').addClass('opacity0');
    $('#room-button-green').removeClass('opacity100 z-index-10 green-button-appear');
    $('#room-button-green').addClass('opacity0');
    $('#room-line-helf').removeClass('opacity100');
    $('#room-line-helf').addClass('opacity0');
    $('#room-scenograph').removeClass('opacity0');
    $('#room-scenograph').addClass('opacity100');
    $('#room-line').removeClass('opacity0')
    $('#room-line').addClass('opacity100 z-index-9');
});

// move mouse ,button-green-alone appear
$('#room-line').hover(function() {
    $('#room-button-green-alone').removeClass('opacity0');
    $('#room-button-green-alone').addClass('opacity100 z-index-10');
});

// mousedown animation
$('#room-button-green-alone').mousedown(function() {
    $('#room-line').removeClass('opacity100');
    $('#room-line').addClass('opacity0');
    $(this).text('Release to Go Back Regular Solution');
    $(this).removeClass('btn-secondary');
    $(this).addClass('btn-primary');
}).mouseup(function() {
    $('#room-line').removeClass('opacity0');
    $('#room-line').addClass('opacity100');
    $(this).text('Hold On to Check ZingPower Solution');
    $(this).removeClass('btn-primary');
    $(this).addClass('btn-secondary');
});


// click 'zingpower' button then switch pictures
$('#room-button-green').click(function() {
    $('#init-house').removeClass('opacity0');
    $('#init-house').addClass('opacity100 z-index-10');
    $('#init-house').click(function() {
        // make third view layer back init state
        $('#room-scenograph').removeClass('opacity100 z-index-9');
        $('#room-scenograph').addClass('opacity0');
        $(this).removeClass('opacity100 animated pulse z-index-10');
        $(this).addClass('opacity0');
        $('#room-button-red-alone').removeClass('opacity100 animated pulse z-index-10');
        $('#room-button-red-alone').addClass('opacity0');
        $('#room-button-green-alone').removeClass('opacity100 animated pulse z-index-10');
        $('#room-button-green-alone').addClass('opacity0');
        // make secound view layer appear
        $('#room-line-helf').removeClass('opacity0');
        $('#room-line-helf').addClass('opacity100');
        $('#room-button-red').removeClass('opacity0');
        $('#room-button-red').addClass('opacity100 z-index-10 red-button-appear');
        $('#room-button-green').removeClass('opacity0');
        $('#room-button-green').addClass('opacity100 z-index-10 green-button-appear');
    })
    // third view layer -> room-scenograph appear
    $('#room-button-red').removeClass('opacity100 z-index-10 red-button-appear');
    $('#room-button-red').addClass('opacity0');
    $('#room-button-green').removeClass('opacity100 z-index-10');
    $('#room-button-green').addClass('opacity0');
    $('#room-line-helf').removeClass('opacity100');
    $('#room-line-helf').addClass('opacity0');
    $('#room-scenograph').removeClass('opacity0');
    $('#room-scenograph').addClass('opacity100 z-index-9');
    $('#room-button-red-alone').removeClass('z-index-11');
});

// move mouse ,button-red-alone appear
$('#room-scenograph').hover(function() {
    $('#room-button-red-alone').removeClass('opacity0');
    $('#room-button-red-alone').addClass('opacity100 z-index-10');
});

// mousedown animation
$('#room-button-red-alone').mousedown(function() {
    $('#room-line').removeClass('opacity0');
    $('#room-line').addClass('opacity100 z-index-10');
    $(this).text("Release to Go Back ZingPower Solution");
    $(this).removeClass('btn-secondary')
    $(this).addClass('btn-warning');
}).mouseup(function() {
    $('#room-line').removeClass('opacity100 z-index-10');
    $('#room-line').addClass('opacity0');
    $(this).text("Hold On to Check Regular Solution");
    $(this).removeClass('btn-warning')
    $(this).addClass('btn-secondary');
});