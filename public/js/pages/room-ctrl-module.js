/*
 * @Author: vayne
 * @Date:   2017-11-24 16:56:17
 * @Last Modified by:   vayne
 * @Last Modified time: 2017-11-30 16:12:40
 */
// Move the mouse, zoom in and out, and change the transparency of the ring
$('#room-ctrl-phone-original-container').hover(function() {
    $('#room-ctrl-icon-finger').addClass('animated pulse');
    $('#room-ctrl-rolling').removeClass('opacity-20');
}, function() {
    $('#room-ctrl-icon-finger').removeClass('animated pulse');
});

// Click on the finger, the background picture switch, the mobile phone content pictures change
$('#room-ctrl-icon-finger').click(function() {
    $('#room-ctrl-phone-original-container').detach();
    $('#room-ctrl-rolling').detach();
    $('#room-ctrl-icon-finger').detach();
    $('#room-ctrl-tip-text').detach();
    $('#room-ctrl-original-img').attr("src", "/img/room-ctrl/monochrome.jpg");
    $('#room-ctrl-logo').attr("src", "/img/room-ctrl/logo-green.png");
    $('#room-ctrl-phone-container').append('<img src="/img/room-ctrl/phone/phone-bg.png" alt="" id="room-ctrl-phone-bg">');
    $('#room-ctrl-phone-container').append('<img src="/img/room-ctrl/phone/phone-ctrl-icon-gray.png" alt="" id="room-ctrl-phone-ctrl-option">');
    $('#room-ctrl-phone-container').append('<img src="/img/room-ctrl/phone/phone-ctrl-hotel-ser-origin.png" alt="" id="room-ctrl-phone-ctrl-hotel-ser">');
    $('#room-ctrl-phone-container').append('<img src="/img/room-ctrl/phone/phone-ctrl-room-ser-origin.png" alt="" id="room-ctrl-phone-ctrl-room-ser">');
    $('#room-ctrl-phone-container').append('<img src="/img/room-ctrl/phone/phone-ctrl-open-btn.png" alt="" id="room-ctrl-phone-ctrl-open-btn">');
    $('.room-ctrl-container').append('<img src="/img/room-ctrl/room-ctrl-hotel-ser.png" alt="" id="room-ctrl-hotel-ser" style="display: none">')

    // HOTEL SERVICES
    // hover effect
    $('#room-ctrl-phone-ctrl-hotel-ser').hover(function() {
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-hotel-ser.png");
    },function(){
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-hotel-ser-origin.png");
    })
    // HOTEL SERVICES click effect
    $('#room-ctrl-phone-ctrl-hotel-ser').click(function(){
        $('#room-ctrl-hotel-ser').toggle('slow');
    });

    
    // ROOM SERVICES
    // hover effect
    $('#room-ctrl-phone-ctrl-room-ser').hover(function() {
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-room-ser.png");
    },function(){
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-room-ser-origin.png")
    })


    // ROOM SERVICES click effect room-control Interface appear
    $('#room-ctrl-phone-ctrl-room-ser').click(function(){
        $('#room-ctrl-hotel-ser').css("display","none");
        $('#room-ctrl-phone-container').detach();
        $('#room-ctrl-phone-container-room-ser').toggle('slow');
    })

    // click icon-air effect
    $('#phone-room-ctrl-icon-air').click(function(){
        $("#icon-air-click-after-img").toggle('slow');
    })

    // click icon-tv effect
    $('#phone-room-ctrl-icon-tv').click(function(){
        $("#icon-tv-click-after-img").toggle('slow');
    })

    // click icon-curtain effect
    $('#phone-room-ctrl-icon-curtain').click(function(){
        $("#icon-curtain-click-after-img").toggle('slow');
    })
})


