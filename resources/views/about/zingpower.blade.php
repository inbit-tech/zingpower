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

<!-- Zing Power History -->
<section id="timeline">
	<div class="time-card-wrapper">
		<!-- Year 2016 -->
		<div class="time-card time-card--1">
			<div class="head">
				<div class="number-box">
					<span>2016</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>

		<!-- Year 2015 -->
		<div class="time-card time-card--2">
			<div class="head">
				<div class="number-box">
					<span>2015</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>

		<!-- Year 2014 -->
		<div class="time-card time-card--3">
			<div class="head">
				<div class="number-box">
					<span>2014</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>

		<!-- Year 2013 -->
		<div class="time-card time-card--4">
			<div class="head">
				<div class="number-box">
					<span>2013</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>

		<!-- Year 2012 -->
		<div class="time-card time-card--5">
			<div class="head">
				<div class="number-box">
					<span>2012</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>

		<!-- Year 2011 -->
		<div class="time-card time-card--6">
			<div class="head">
				<div class="number-box">
					<span>2011</span>
				</div>
				<h2><span class="small">Subtitle</span> Text</h2>
			</div>
			<div class="body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
				<img src="http://placehold.it/1000x500" alt="">
			</div>
		</div>
	</div>
</section>

<div class="container-fluid text-center">
	<h4 class="display-4" id="found-year">2009</h4>
</div>

@endsection