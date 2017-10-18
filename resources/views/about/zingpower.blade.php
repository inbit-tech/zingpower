@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>About Us - Zing Power</title>
@endsection

<!-- Custom CSS for About Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/about.css') }}" rel="stylesheet" />
@endsection

@section ('content')
<!-- Header image include page title -->
<div class="jumbotron jumbotron-fluid">
	<div class="container-fluid">
		<h2 class="display-4 text-center">Know More About Us</h2>
	</div>
</div>

<!-- Timeline -->
<div class="timeline"></div>

<!-- Current Year Content -->
<div id="about-header" class="container-fluid text-center">
	<!-- Featured Title -->
	<div>
		<h2 id="current-year">2017</h2>
	</div>

	<!-- Featured Quote -->
	<div class="quote-row">
		<h2 id="feature-quote">"Our greatest motivation in life comes from not knowing the future"</h2>
	</div>

	<!-- Featured image about zingpower -->
	<div class="container-fluid hero-img"></div>
</div>

<!-- History Content -->


<div class="container-fluid text-center">
	<h4 class="display-4" id="found-year">2009</h4>
</div>

@endsection