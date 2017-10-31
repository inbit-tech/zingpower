@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Zigbee Z-Wave or LoRaWAN Local Network Setup - Solutions - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/lns.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
	<div class="cover-image"></div>
</section>

<section id="content-wrapper">
	<div class="lns-func-wrapper mx-auto">
		<!-- Function 1 -->
		<div class="lns-func">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-title">LoRa</p>
		</div>
		<!-- Function 2 -->
		<div class="lns-func">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-title">Zigbee</p>
		</div>
		<!-- Function 3 -->
		<div class="lns-func">
			<img src="http://placeimg.com/150/150/any" alt="">
			<p class="lns-func-title">Z-Wave</p>
		</div>
	</div>
	
	<div class="lns-text mx-auto">
		<p class="lns-intro">Our solution is one of the IoT solution based on LPWAN technology --- LoRa short for long range. Alongside WIFI which helps guest with internet access to check their facebook and twitter status, we help hotel to better manage their staff and most importantly their countless facilities. LoRa provides coverage that is greater in range compared to that of existing cellular networks. It is easy to plug into the existing infrastructure and offers a solution to serve battery-operated IoT applications.</p>
	</div>

	<div class="lns-card">
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Low Cost</h4>
		    <p class="card-text">Because its on public frequency, there is no data cast. Powered by battery which last for 1 to 2 years so minimum power required therefore power supply related work/cost saved.</p>
		  </div>
		</div>
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Easy to deploy</h4>
		    <p class="card-text">Installation is very simple, registered electrician can easily handle the job within couple of weeks for the size of a Five star hotel.</p>
		  </div>
		</div>
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="http://placeimg.com/238/180/any" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">Simple to use</h4>
		    <p class="card-text">User friendly interface, also customizable according to client request, management terminal can be a laptop, desktop or mobile phone. We also open API to serve your database.</p>
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