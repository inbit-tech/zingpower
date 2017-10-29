$(window).bind('scroll', function() {
	if ($(window).scrollTop() > 50) {
		$('.navbar').removeClass('navbar-dark');
		$('.navbar').addClass('bg-light navbar-light');
	} else {
		$('.navbar').removeClass('bg-light navbar-light');
		$('.navbar').addClass('navbar-dark');
	}
});