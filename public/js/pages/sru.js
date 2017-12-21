$(function() {
	/*
	 * DMS section
	 * click image to change phone interface
	 */
	$('.dms-menu-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_main_menu.png");
		return false;
	});

	$('.dms-room-service-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_room_service.png");
		return false;
	});

	$('.dms-service-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_hotel_service.png");
		return false;
	});

	$('.dms-hotel-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_hotel_info.png");
		return false;
	});

	$('.dms-aircon-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_aircon.png");
		return false;
	});

	$('.dms-light-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_light.png");
		return false;
	});

	$('.dms-curtain-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_curtain.png");
		return false;
	});

	$('.dms-room-control-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_room_control.png");
		return false;
	});

	$('.dms-tv-control-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_tv_control.png");
		return false;
	});

	$('.dms-room-clean-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_house_keeping.png");
		return false;
	});

	$('.dms-food-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_food.png");
		return false;
	});

	$('.dms-concierge-link').click(function() {
		$('#dms-bg').attr('src', "/img/sru/dms_concierge.png");
		return false;
	});

	/*
	 * DMS Section
	 * hover icon to change overhead text
	 */
	$('.dms-menu-link').hover(function() {
		$('.dms-header-text').text("Main Menu");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-room-service-link').hover(function() {
		$('.dms-header-text').text("Room Services");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-service-link').hover(function() {
		$('.dms-header-text').text("Hotel Services");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-hotel-link').hover(function() {
		$('.dms-header-text').text("Franchise Info");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-aircon-link').hover(function() {
		$('.dms-header-text').text("Air Conditioner Control");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-light-link').hover(function() {
		$('.dms-header-text').text("Lights Control");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-curtain-link').hover(function() {
		$('.dms-header-text').text("Curtain Control");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-room-control-link').hover(function() {
		$('.dms-header-text').text("Room Control");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-tv-control-link').hover(function() {
		$('.dms-header-text').text("Television Control");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-room-clean-link').hover(function() {
		$('.dms-header-text').text("Housekeeping");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-food-link').hover(function() {
		$('.dms-header-text').text("Food");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});

	$('.dms-concierge-link').hover(function() {
		$('.dms-header-text').text("Concierge");
	}, function() {
		$('.dms-header-text').text("Device Management System");
	});
});