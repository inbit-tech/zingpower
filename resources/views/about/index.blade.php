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
	<div class="whoweare mx-auto">
		<p class="about-title whoweare-title">
			Who We Are
		</p>
		<div class="whoweare-content">
			<p>We are a R&D house based in Xi’an China, with a team of electrical engineers and specialists, designing, developing and customizing in electrical and semi-conductor related products, to meet customers’ expectations and unique requirement. Another team of software developers specialized in mobile technologies and business analytics.</p>
			<p>We have provided extensive mobile phone and wireless charging solutions to over 120 customer bases in various industries mainly in F&B, Logistics, Automobile,hospitality, educations and etc. </p>
		</div>
	</div>
	<div class="vision">
		<div class="vision-image mx-auto">
			<p class="about-title vision-title">
				Our Vision
			</p>
			<p class="vision-text mx-auto">
				An endless possibilities where not only everyone but also everything gets connected for better style of living.
			</p>
		</div>
	</div>
	<div class="whatwedo mx-auto">
		<p class="about-title whatwedo-title">
			What We Do
		</p>
		<div class="whatwedo-content">
			<p>We deliver a complete and comprehensive working solution to help hotels to achieveseamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
			<p>Our exclusive solution includes combinations of smart devices, apps, backendsystem, database and etc., it is customizable to match each customers' unique requirements.</p>
		</div>
	</div>
	<div class="mission">
		<div class="mission-image">
			<p class="about-title mission-title">
				Our Mission
			</p>
			<p class="about-text mission-text">
				To integrate SMART solution for in-room services using quality products with innovative technology.
			</p>
		</div>
	</div>
</section>
@endsection