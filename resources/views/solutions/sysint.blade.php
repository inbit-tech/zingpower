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
	<div class="sysint-text mx-auto">
		<p class="sysint-intro">We deliver a complete and comprehensive working solution to help customer to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
	</div>
	<div class="sysint-func-wrapper">
		<!-- Function 1 -->
		<figure class="figure">
		  <img src="http://placeimg.com/150/150/any" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Building</figcaption>
		</figure>
		<!-- Function 2 -->
		<figure class="figure">
		  <img src="http://placeimg.com/150/150/any" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Hotel</figcaption>
		</figure>
		<!-- Function 3 -->
		<figure class="figure">
		  <img src="http://placeimg.com/150/150/any" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">School</figcaption>
		</figure>
		<!-- Function 4 -->
		<figure class="figure">
		  <img src="http://placeimg.com/150/150/any" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Hospital</figcaption>
		</figure>
		<!-- Function 5 -->
		<figure class="figure">
		  <img src="http://placeimg.com/150/150/any" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Breeding</figcaption>
		</figure>
	</div>
	<div class="sysint-img">
		<div class="sysint-coverimg"></div>
	</div>
	<div class="sysint-card-wrapper">
		<!-- Card 1 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 2 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 3 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
		<!-- Card 4 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Card title</h4>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div>
</section>
@endsection