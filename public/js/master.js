$(window).bind('scroll', function() {
	if ($(window).scrollTop() > ($('#cover-wrapper').height() - $('.navbar').height())) {
		$('.navbar').removeClass('zp-navi-large');
		$('.navbar').addClass('zp-navi-small');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-z.png'
		});
		$('#zp-logo').height(26);
		$('#navbarNavDropdown').css({
			'font-size': '1.0rem'
		})
	} else {
		$('#zp-navi').removeClass('zp-navi-small');
		$('#zp-navi').addClass('zp-navi-large');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-color.png'
		});
		$('#zp-logo').height(48);
		$('#navbarNavDropdown').css({
			'font-size': '1.1rem'
		})
	}
});
