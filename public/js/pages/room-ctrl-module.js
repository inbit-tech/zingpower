/*
 * @Author: vayne
 * @Date:   2017-11-24 16:56:17
 * @Last Modified by:   vayne
 * @Last Modified time: 2017-12-12 02:22:47
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
    $(this).remove();
    $('#room-ctrl-phone-original-container').css('display', '');
    $('#room-ctrl-phone-original-container').addClass('animated fadeInUp');
});

// Move the mouse, zoom in and out, and change the transparency of the ring
$('#room-ctrl-phone-original-container').hover(function() {
    $('#room-ctrl-icon-finger').addClass('animated pulse');
    $('#room-ctrl-rolling').removeClass('opacity-20');
}, function() {
    $('#room-ctrl-icon-finger').removeClass('animated pulse');
});

// Click on the finger, inter hotel-services and room-services phone container
$('#room-ctrl-icon-finger').click(function() {
    $('#room-ctrl-original-img').addClass('grayscale');
    $('#room-ctrl-phone-container-hotel-ser').css("display", "");
    $('#room-ctrl-phone-original-container').css("display", "none");
    $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
    $('#room-ctrl-phone-container-light-ctrl').css("display", "none");

    // hover and click switch button event
    $('#room-ctrl-phone-ctrl-open-btn').hover(function() {
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-close-btn.png");
    }, function() {
        $(this).attr("src", "/img/room-ctrl/phone/phone-ctrl-open-btn.png");
    });
    $('#room-ctrl-phone-ctrl-open-btn').click(function() {
        $('#room-ctrl-original-img').removeClass('grayscale');
        $('#room-ctrl-phone-container-room-ctrl').css("display", "none");
        $('#room-ctrl-phone-container-light-ctrl').css("display", "none");
        $('#room-ctrl-phone-container-hotel-ser').css('display', 'none');
        $('#room-ctrl-phone-original-container').css('display', '');
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
            $('#room-ctrl-hotel-ser').removeClass('hotel-ser-fadeInLeft');
            $('#room-ctrl-hotel-ser').addClass('hotel-ser-fadeOutLeft');
        } else {
            $('#room-ctrl-hotel-ser').css('display', '');
            $('#room-ctrl-hotel-ser').removeClass('hotel-ser-fadeOutLeft');
            $('#room-ctrl-hotel-ser').addClass('hotel-ser-fadeInLeft');
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
})



// room control phone container each icon hover and click event
// room-ctrl-icon-callback click event
$('#room-ctrl-icon-callback').click(function() {
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
$('#phone-room-ctrl-icon-air').click(function() {
    $('#icon-air-click-after-img').toggle();
})

// icon-tv hover event
$('#phone-room-ctrl-icon-tv').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-tv-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-tv.png");
})
// click icon-tv event
$('#phone-room-ctrl-icon-tv').click(function() {
    $('#icon-tv-click-after-img').toggle();
})

// icon-curtain hover event
$('#phone-room-ctrl-icon-curtain').hover(function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-curtain-after.png");
}, function() {
    $(this).attr('src', "/img/room-ctrl/phone/phone-room-ctrl-icon-curtain.png");
})
// click icon-curtain event
$('#phone-room-ctrl-icon-curtain').click(function() {
    $('#icon-curtain-click-after-img').toggle();
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
$('#bed-light').click(function() {
    $('#icon-bed-light-click-after-img').toggle();
});

// icon-main-light hover event
$('#main-light').hover(function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/main-light-after.png");
}, function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/main-light.png");
});
// icon-main-light click event
$('#main-light').click(function() {
    $('#icon-main-light-click-after-img').toggle();
});

// icon-office-light hover event
$('#office-light').hover(function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/office-light-after.png");
}, function() {
    $(this).attr("src", "img/room-ctrl/phone/light-ctrl/office-light.png");
});
// icon-office-light click event
$('#office-light').click(function() {
    $('#icon-office-light-click-after-img').toggle();
});