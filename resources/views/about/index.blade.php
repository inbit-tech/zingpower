@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>About Us - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/about.css') }}" rel="stylesheet">
@endsection

@section ('content')
<section id="cover-wrapper">
	<div class="cover-image">
		<p class="cover-text">
			We are Zing Power
		</p>
	</div>
</section>
<section id="content-wrapper">
	<div class="whoweare">
		<div class="whoweare-title">
			Who We Are
		</div>
		<div class="whoweare-content">
			<p>We are a R&D house based in Xi’an China, with a team of electrical engineers and specialists, designing, developing and customizing in electrical and semi-conductor related products, to meet customers’ expectations and unique requirement. Another team of software developers specialized in mobile technologies and business analytics.</p>
			<p>We have provided extensive mobile phone and wireless charging solutions to over 120 customer bases in various industries mainly in F&B, Logistics, Automobile,hospitality, educations and etc. </p>
		</div>
	</div>
	<div class="vision">
		<div class="vision-image">
			<h1 class="vision-title">
				Our Vision
			</h1>
			<p class="vision-text">
				An endless possibilities where not only everyone but also everything gets connected for better style of living.
			</p>
		</div>
	</div>
	<div class="whatwedo">
		<div class="whatwedo-title">
			What We Do
		</div>
		<div class="whatwedo-content">
			<p>We deliver a complete and comprehensive working solution to help hotels to achieveseamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
			<p>Our exclusive solution includes combinations of smart devices, apps, backendsystem, database and etc., it is customizable to match each customers' unique requirements.</p>
		</div>
	</div>
	<div class="mission">
		<div class="mission-image">
			<h1 class="mission-title">
				Our Mission
			</h1>
			<p class="mission-text">
				To integrate SMART solution for in-room services using quality products with innovative technology.
			</p>
		</div>
	</div>
</section>
@endsection