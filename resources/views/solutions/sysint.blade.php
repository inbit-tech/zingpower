@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>System Integration - Solutions - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/sysint.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
	<div class="cover-image">
		<p class="cover-text">System Integration</p>
	</div>
</section>

<!-- Content Image -->
<section id="content-wrapper">
	<div class="sysint-text mx-auto">
		<p class="sysint-intro">We deliver a complete and comprehensive working solution to help customer to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
	</div>
	<div class="sysint-func-wrapper">
		<p class="sysint-func-intro">Our Exclusive Solutions</p>
		<!-- Function 1 -->
		<figure class="figure">
		  <img src="/img/sysint/devices_icon.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Smart Devices</figcaption>
		</figure>
		<!-- Function 2 -->
		<figure class="figure">
		  <img src="/img/sysint/apps_icon.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Apps</figcaption>
		</figure>
		<!-- Function 3 -->
		<figure class="figure">
		  <img src="/img/sysint/backend_icon.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Backend System</figcaption>
		</figure>
		<!-- Function 4 -->
		<figure class="figure">
		  <img src="/img/sysint/db_icon.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Database</figcaption>
		</figure>
		<!-- Function 5 -->
		<figure class="figure">
		  <img src="/img/sysint/custom_icon.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Customize</figcaption>
		</figure>
	</div>
	<div class="sysint-img">
		<div class="sysint-coverimg">
			<p class="sysint-cover-text">One Stop Solution</p>
		</div>
	</div>
	<div class="sysint-card-wrapper">
		<!-- Card 1 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="/img/sysint/card_01.jpg" alt="Card image cap">
		  <div class="card-body">
		    <p class="card-text">Virtualize and Centralize of control systems in the room</p>
		  </div>
		</div>
		<!-- Card 2 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="/img/sysint/card_02.jpg" alt="Card image cap">
		  <div class="card-body">
		    <p class="card-text">Increase mobility by control anything anytime and anywhere in the room</p>
		  </div>
		</div>
		<!-- Card 3 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="/img/sysint/card_03.jpg" alt="Card image cap">
		  <div class="card-body">
		    <p class="card-text">Reduce Maintenance and supporting cost of individual control system</p>
		  </div>
		</div>
		<!-- Card 4 -->
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="/img/sysint/card_04.jpg" alt="Card image cap">
		  <div class="card-body">
		    <p class="card-text">Minimum room occupancy time, very limited or 0 cabling required</p>
		  </div>
		</div>
	</div>
</section>
@endsection