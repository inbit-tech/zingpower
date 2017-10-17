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

<!-- History Content -->
<div class="container-fluid">
	<!-- Row 1 -->
	<div class="row align-items-center text-center feature-row">
		<div class="col">
			<p class="feature-intro">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
	</div>
	<!-- Row 2 -->
	<div class="row align-items-center text-center feature-row">
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
		<div class="col">
			<p class="feature-intro">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
	</div>
	<!-- Row 3 -->
	<div class="row align-items-center text-center feature-row">
		<div class="col">
			<p class="feature-intro">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
	</div>
	<!-- Row 4 -->
	<div class="row align-items-center text-center feature-row">
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
		<div class="col">
			<p class="feature-intro">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
	</div>
</div>

<div class="container-fluid text-center">
	<h4 class="display-4" id="found-year">2009</h4>
</div>

@endsection