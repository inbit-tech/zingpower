@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>System Integration - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/sysint.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
	<div class="cover-image"></div>
</section>

<!-- Content Image -->
<section id="content-wrapper">
	<div class="sysint-text">
		<p class="sysint-intro">We deliver a complete and comprehensive working solution to help customer to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
	</div>
	<div class="sysint-func">
		<!-- Function 1 -->
		<div class="sysint-func-1">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="sysint-func-1-title">Building</p>
		</div>
		<!-- Function 2 -->
		<div class="sysint-func-2">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="sysint-func-2-title">Hotel</p>
		</div>
		<!-- Function 3 -->
		<div class="sysint-func-3">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="sysint-func-3-title">School</p>
		</div>
		<!-- Function 4 -->
		<div class="sysint-func-4">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="sysint-func-4-title">Hospital</p>
		</div>
		<!-- Function 5 -->
		<div class="sysint-func-5">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="sysint-func-5-title">Breeding</p>
		</div>
	</div>
	<div class="sysint-img">
		<img src="http://placeimg.com/1280/450/any" alt="">
	</div>
	<div class="sysint-card">
		<!-- Card 1 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 2 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 3 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 4 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</section>
@endsection