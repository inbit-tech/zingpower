/*
 * @Author: vayne
 * @Date:   2017-11-24 16:56:17
 * @Last Modified by:   vayne
 * @Last Modified time: 2018-01-22 19:00:30
 */

// make DOM disappear
function remove_add_class(id, removeclass, addClass) {
    $(id).removeClass(removeclass);
    $(id).addClass(addClass);
}

// make container display attribute
function attr_value(id, attr, value) {
    $(id).css(attr, value)
}


// room-ctrl-init-btn click event
$('#room-ctrl-init-btn').click(function() {
    remove_add_class("#room-ctrl-init-btn", "opacity100", "opacity0");
    remove_add_class("#room-ctrl-original-img", "opacity100", "opacity0");
    attr_value("#room-ctrl-phone-container-room-ctrl", "display", "none");
    attr_value("#room-ctrl-phone-container-light-ctrl", "display", "none");
    attr_value("#room-ctrl-phone-container-hotel-ser", "display", "");
    remove_add_class("#room-ctrl-phone-container-hotel-ser", "", "fadeInUp");
})


// in hotel-services and room-services phone container

// hover switch button in the middle event
$('#room-ctrl-phone-ctrl-open-btn').hover(function() {
    remove_add_class("#room-ctrl-phone-ctrl-open-btn", "", "grayscale");
}, function() {
    remove_add_class("#room-ctrl-phone-ctrl-open-btn", "grayscale", "");
});
// click switch button in the middle event
// remove three phone container,dining car.init btn and original img appear
$('#room-ctrl-phone-ctrl-open-btn').click(function() {
    attr_value("#room-ctrl-phone-container-hotel-ser", "display", "none");
    attr_value("#room-ctrl-phone-container-room-ctrl", "display", "none");
    attr_value("#room-ctrl-phone-container-light-ctrl", "display", "none");
    remove_add_class("#room-ctrl-hotel-ser", "opacity100", "opacity0");
    remove_add_class("#room-ctrl-original-img", "opacity0", "opacity100");
    remove_add_class("#room-ctrl-init-btn", "opacity0", "opacity100");
});

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
        remove_add_class("#room-ctrl-hotel-ser", "opacity100", "opacity0");
    } else {
        remove_add_class("#room-ctrl-hotel-ser", "opacity0", "opacity100");
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
    attr_value("#room-ctrl-phone-container-hotel-ser", "display", "none");
    attr_value("#room-ctrl-phone-container-room-ctrl", "display", "");
})

// in room control phone container 
// room-ctrl-icon-callback click event
$('#room-ctrl-icon-callback').click(function() {
    remove_add_class("#room-ctrl-phone-container-hotel-ser", "animated fadeInUp", "");
    attr_value("#room-ctrl-phone-container-hotel-ser", "display", "");
    attr_value("#room-ctrl-phone-container-light-ctrl", "display", "none");
    attr_value("#room-ctrl-phone-container-room-ctrl", "display", "none");

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
        remove_add_class("#icon-air-click-after-img", "opacity100", "opacity0");
    } else {
        attr_value("#icon-air-click-after-img", "display", "");
        remove_add_class("#icon-air-click-after-img", "opacity0", "opacity100");
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
        remove_add_class("#icon-tv-click-after-img", "opacity100", "opacity0");
    } else {
        attr_value("#icon-tv-click-after-img", "display", "");
        remove_add_class("#icon-tv-click-after-img", "opacity0", "opacity100");
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
        remove_add_class("#icon-curtain-click-after-img", "opacity100", "opacity0");
    } else {
        attr_value("#icon-curtain-click-after-img","display","")
        remove_add_class("#icon-curtain-click-after-img","opacity0","opacity100")
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
    attr_value("#room-ctrl-phone-container-light-ctrl","display","");
    attr_value("#room-ctrl-phone-container-room-ctrl","display","none");
});






// in light control phone container 
// light-ctrl-icon-callback click event
$('#light-ctrl-icon-callback').click(function() {
    attr_value("#room-ctrl-phone-container-room-ctrl","display","");
    attr_value("#room-ctrl-phone-container-light-ctrl","display","none");
});

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
        remove_add_class("#icon-bed-light-click-after-img","opacity100","opacity0");
    } else {
        remove_add_class("#icon-bed-light-click-after-img","opacity0","opacity100");
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
        remove_add_class("#icon-main-light-click-after-img","opacity100","opacity0");
    } else {
        remove_add_class("#icon-main-light-click-after-img","opacity0","opacity100");
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
        remove_add_class("#icon-office-light-click-after-img","opacity100","opacity0");
    } else {
        remove_add_class("#icon-office-light-click-after-img","opacity0","opacity100");
    }
});