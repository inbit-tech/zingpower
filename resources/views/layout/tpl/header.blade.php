<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">

	@yield ('page-title')

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Google Fonts -->
	<link href="https://fonts.cat.net/css?family=Antic+Slab" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="{{ asset('/css/master.css') }}" rel="stylesheet" />

	<!-- Custom CSS for individual page -->
	@yield ('custom-css')
</head>
<body>