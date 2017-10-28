@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>LMS - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/lms.css') }}" rel="stylesheet">
@endsection

@section ('content')
<section class="cover-wrapper">
	<img src="http://placeimg.com/1280/800/any" alt="">
</section>

<section class="content-wrapper">
	<div class="lns-func">
		<!-- Function 1 -->
		<div class="lns-func-1">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-1-title">Building</p>
		</div>
		<!-- Function 2 -->
		<div class="lns-func-2">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-2-title">Hotel</p>
		</div>
		<!-- Function 3 -->
		<div class="lns-func-3">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-3-title">School</p>
		</div>
	</div>
	
	<div class="lns-text">
		<p class="lns-intro">We deliver a complete and comprehensive working solution to help customer to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
	</div>

	<div class="lns-card">
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>

	<div class="lns-prod-wrapper">
		<div class="lns-prod">
			<div class="lns-prod-img">
				<img src="http://placeimg.com/640/480/any" alt="">
			</div>
			<div class="lns-prod-content">
				<div class="lns-prod-content-title">
					
				</div>
				<div class="lns-prod-content-text">
					
				</div>
			</div>
		</div>

		<div class="lns-prod">
			<div class="lns-prod-img">
				<img src="http://placeimg.com/640/480/any" alt="">
			</div>
			<div class="lns-prod-content">
				<div class="lns-prod-content-title">
					
				</div>
				<div class="lns-prod-content-text">
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection