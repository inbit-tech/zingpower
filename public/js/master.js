$(window).bind('scroll', function() {
	if ($(window).scrollTop() > 50 ) {
		$('.navbar').removeClass('zp-navi-large');
		$('.navbar').addClass('zp-navi-small');
		$('.navbar').addClass('bg-light');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-z.png'
		});
		$('#zp-logo').height(26);
		$('#navbarNavDropdown').css({
			'font-size': '1.0rem'
		})
	} else {
		$('#zp-navi').removeClass('zp-navi-small');
		$('.navbar').removeClass('bg-light');
		$('#zp-navi').addClass('zp-navi-large');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-white.png'
		});
		$('#zp-logo').height(48);
		$('#navbarNavDropdown').css({
			'font-size': '1.1rem'
		})
	}
});
