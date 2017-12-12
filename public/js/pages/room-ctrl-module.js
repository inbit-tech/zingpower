/*
 * @Author: vayne
 * @Date:   2017-11-24 16:56:17
 * @Last Modified by:   vayne
 * @Last Modified time: 2017-12-12 14:41:58
 */

// room-ctrl-init-btn event
// room-ctrl-init-btn hover event
$('#room-ctrl-init-btn').hover(function() {
    $(this).attr('src', '/img/room-ctrl/room-ctrl-init-btn-hover.png');
}, function() {
    $(this).attr('src', '/img/room-ctrl/room-ctrl-init-btn.png');
})
// room-ctrl-init-btn click event
$('#room-ctrl-init-btn').click(function() {
    $('#room-ctrl-init-btn').removeClass('opacity100');
    $('#room-ctrl-init-btn').addClass('opacity0');
    $('#room-ctrl-phone-container-hotel-ser').css('display', '');
    $('#room-ctrl-phone-container-hotel-ser').addClass('animated fadeInUp');
    $('#room-ctrl-original-img').attr('src', '/img/room-ctrl/monochrome.jpg');
    $('#room-ctrl-phone-container-hotel-ser').css("display", "");
    $('#room-ctrl-phone-original-container').css("display", "none");
    $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
    $('#room-ctrl-phone-container-light-ctrl').css("display", "none");
});


// hover and click switch button event
$('#room-ctrl-phone-ctrl-open-btn').hover(function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-close-btn.png");
}, function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-open-btn.png");
});

$('#room-ctrl-phone-ctrl-open-btn').click(function() {
    $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
    $('#room-ctrl-phone-container-light-ctrl').css("display", "none");
    $('#room-ctrl-phone-container-hotel-ser').css('display', 'none');
    $('#room-ctrl-hotel-ser').css('display', 'none');
    $('#room-ctrl-original-img').attr('src', '/img/room-ctrl/original.jpg');
    $('#room-ctrl-init-btn').removeClass('opacity0');
    $('#room-ctrl-init-btn').addClass('opacity100');
})

// HOTEL SERVICES
// hover event
$('#room-ctrl-phone-ctrl-hotel-ser').hover(function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-hotel-ser.png");
}, function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-hotel-ser-origin.png");
})
// HOTEL SERVICES click event
var hotelCount = 0;
$('#room-ctrl-phone-ctrl-hotel-ser').click(function() {
    hotelCount++;
    if (hotelCount % 2 == 0) {
        $('#room-ctrl-hotel-ser').removeClass('opacity100');
        $('#room-ctrl-hotel-ser').addClass('opacity0');
    } else {
        $('#room-ctrl-hotel-ser').removeClass('opacity0');
        $('#room-ctrl-hotel-ser').addClass('opacity100');
    }
});

// ROOM SERVICES
// hover event
$('#room-ctrl-phone-ctrl-room-ser').hover(function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-room-ser.png");
}, function() {
    $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-room-ser-origin.png")
})

// ROOM SERVICES click event room-control Interface appear
$('#room-ctrl-phone-ctrl-room-ser').click(function() {
    $('#room-ctrl-phone-container-hotel-ser').css("display", "none");
    $('#room-ctrl-phone-container-room-ctrl').css("display", "");;
})


// room control phone container each icon hover and click event
// room-ctrl-icon-callback click event
$('#room-ctrl-icon-callback').click(function() {
    $('#room-ctrl-phone-container-hotel-ser').removeClass('animated fadeInUp');
    $('#room-ctrl-phone-container-hotel-ser').css("display", "");
    $('#room-ctrl-phone-container-light-ctrl').css("display", "none");
    $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
})
// icon-air hover event
$('#phone-room-ctrl-icon-air').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-air-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-air.png");
})
// click icon-air event
var icon_air = 0;
$('#phone-room-ctrl-icon-air').click(function() {
    icon_air++;
    if (icon_air % 2 == 0) {
        $('#icon-air-click-after-img').removeClass('opacity100');
        $('#icon-air-click-after-img').addClass('opacity0');
    } else {
        $('#icon-air-click-after-img').css('display', '');
        $('#icon-air-click-after-img').addClass('opacity100');
        $('#icon-air-click-after-img').removeClass('opacity0');
    }
})

// icon-tv hover event
$('#phone-room-ctrl-icon-tv').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-tv-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-tv.png");
})
// click icon-tv event
var icon_tv = 0
$('#phone-room-ctrl-icon-tv').click(function() {
    icon_tv++;
    if (icon_tv % 2 == 0) {
        $('#icon-tv-click-after-img').removeClass('opacity100');
        $('#icon-tv-click-after-img').addClass('opacity0');
    } else {
        $('#icon-tv-click-after-img').css('display', '');
        $('#icon-tv-click-after-img').addClass('opacity100');
        $('#icon-tv-click-after-img').removeClass('opacity0');
    }
})

// icon-curtain hover event
$('#phone-room-ctrl-icon-curtain').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-curtain-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-curtain.png");
})
// click icon-curtain event
var icon_curtain = 0
$('#phone-room-ctrl-icon-curtain').click(function() {
    icon_curtain++;
    if (icon_curtain % 2 == 0) {
        $('#icon-curtain-click-after-img').removeClass('opacity100');
        $('#icon-curtain-click-after-img').addClass('opacity0');
    } else {
        $('#icon-curtain-click-after-img').css('display', '');
        $('#icon-curtain-click-after-img').addClass('opacity100');
        $('#icon-curtain-click-after-img').removeClass('opacity0');
    }
})

// icon-light hover event
$('#phone-room-ctrl-icon-light').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-light-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-light.png");
})
// click icon-light event
$('#phone-room-ctrl-icon-light').click(function() {
    $('#room-ctrl-phone-container-light-ctrl').css("display", "");
    $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
})






// light control phone container each icon hover and click event
// light-ctrl-icon-callback click event
$('#light-ctrl-icon-callback').click(function() {
    $('#room-ctrl-phone-container-room-ctrl').css("display", "");
    $('#room-ctrl-phone-container-light-ctrl').css("display", "none");
})

// icon-bed-light hover event
$('#bed-light').hover(function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/bed-light-after.png");
}, function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/bed-light.png");
});
// icon-bed-light click event
var icon_bed_light = 0;
$('#bed-light').click(function() {
    icon_bed_light++;
    if (icon_bed_light % 2 == 0) {
        $('#icon-bed-light-click-after-img').removeClass('opacity100');
        $('#icon-bed-light-click-after-img').addClass('opacity0');
    } else {
        $('#icon-bed-light-click-after-img').addClass('opacity100');
        $('#icon-bed-light-click-after-img').removeClass('opacity0');
    }
});

// icon-main-light hover event
$('#main-light').hover(function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/main-light-after.png");
}, function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/main-light.png");
});
// icon-main-light click event
var icon_main_light = 0;
$('#main-light').click(function() {
    icon_main_light++;
    if (icon_main_light % 2 == 0) {
        $('#icon-main-light-click-after-img').removeClass('opacity100');
        $('#icon-main-light-click-after-img').addClass('opacity0');
    } else {
        $('#icon-main-light-click-after-img').addClass('opacity100');
        $('#icon-main-light-click-after-img').removeClass('opacity0');
    }
});

// icon-office-light hover event
$('#office-light').hover(function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/office-light-after.png");
}, function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/office-light.png");
});
// icon-office-light click event
var icon_office_light = 0;
$('#office-light').click(function() {
    icon_office_light++;
    if (icon_office_light % 2 == 0) {
        $('#office-light').attr("src", "img/room-ctrl/phone/light-ctrl/office-light.png");
        $('#icon-office-light-click-after-img').removeClass('opacity100');
        $('#icon-office-light-click-after-img').addClass('opacity0');
    } else {
        $('#office-light').attr("src", "img/room-ctrl/phone/light-ctrl/office-light-after.png");
        $('#icon-office-light-click-after-img').addClass('opacity100');
        $('#icon-office-light-click-after-img').removeClass('opacity0');
    }
});