$(window).bind('scroll', function() {
	if ($(window).scrollTop() > 50) {
		$('.navbar').removeClass('navbar-dark');
		$('.navbar').addClass('bg-light navbar-light');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-color.png'
		});
	} else {
		$('.navbar').removeClass('bg-light navbar-light');
		$('.navbar').addClass('navbar-dark');
		$('#zp-logo').attr({
			'src': '/img/zp-logo-white.png'
		});
	}
});
