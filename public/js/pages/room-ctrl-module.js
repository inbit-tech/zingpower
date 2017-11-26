/*
* @Author: vayne
* @Date:   2017-11-24 16:56:17
* @Last Modified by:   vayne
* @Last Modified time: 2017-11-26 01:25:49
*/
// Move the mouse, zoom in and out, and change the transparency of the ring
$('#room-ctrl-phone-ctrl').hover(function(){
    $('#room-ctrl-icon-finger').addClass('animated pulse');
    $('#room-ctrl-rolling').removeClass('opacity');
},function(){
    $('#room-ctrl-icon-finger').removeClass('animated pulse');
});

// Click on the finger, the background picture switch, the mobile phone content pictures change
$('#room-ctrl-icon-finger').click(function(){
    $('#room-ctrl-rolling').detach();
    $('#room-ctrl-icon-finger').detach();
    $('#room-ctrl-tip-text').detach();
    $('#room-ctrl-original-img').attr("src","/img/room-ctrl/monochrome.jpg");
    $('#room-ctrl-logo').attr("src","/img/room-ctrl/logo-green.png");
    $('#room-ctrl-module-phone-container').append('<img src="/img/room-ctrl/phone/phone-bg.png" alt="" id="room-ctrl-phone-bg">');
    $('#room-ctrl-module-phone-container').append('<img src="/img/room-ctrl/phone/phone-ctrl-option.png" alt="" id="room-ctrl-phone-ctrl-option">');
})