<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">

	<title>Zing Power</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href="https://fonts.cat.net/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('/css/master.css') }}" rel="stylesheet" />
</head>
<body>
	<!-- Page Header Section -->
	<nav class="navbar sticky-top navbar-light bg-light">
		<a class="navbar-brand" href="#">Zing Power Header</a>
	</nav>

	<!-- Page Content Section -->
	@yield ('content')

	<!-- Page Footer Section -->
	<nav class="navbar sticky-bottom navbar-light bg-light">
		<a class="navbar-brand" href="#">Zing Power Footer</a>
	</nav>

	<!-- Optional JavaScript -->
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>