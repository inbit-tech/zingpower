@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Zigbee Z-Wave or LoRaWAN Local Network Setup - Solutions - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/iot.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
	<div class="cover-image">
		<p class="cover-text">
			Internet of Things
		</p>
	</div>
</section>

<section id="content-wrapper">
	<div class="lns-func-wrapper mx-auto">
		<!-- Function 1 -->
		<div class="lns-func">
			<img src="/img/iot/lora.png" alt="">
		</div>
		<!-- Function 2 -->
		<div class="lns-func">
			<img src="/img/iot/zigbee.png" alt="">
		</div>
		<!-- Function 3 -->
		<div class="lns-func">
			<img src="/img/iot/zwave.png" alt="">
		</div>
	</div>
	
	<div class="lns-text mx-auto">
		<p class="lns-intro">Our solution is one of the IoT solution based on LPWAN technology --- LoRa short for long range. Alongside WIFI which helps guest with internet access to check their facebook and twitter status, we help hotel to better manage their staff and most importantly their countless facilities. LoRa provides coverage that is greater in range compared to that of existing cellular networks. It is easy to plug into the existing infrastructure and offers a solution to serve battery-operated IoT applications.</p>
	</div>

	<div class="card-group mx-auto">
	  <div class="card border-0">
	    <img class="card-img-top" src="/img/iot/cost.png" alt="Card image cap">
	    <div class="card-body">
	      <h4 class="card-title">Low Cost</h4>
	      <p class="card-text">Because its on public frequency, there is no data cast. Powered by battery which last for 1 to 2 years so minimum power required therefore power supply related work/cost saved.</p>
	    </div>
	  </div>
	  <div class="card border-0">
	    <img class="card-img-top" src="/img/iot/deploy.png" alt="Card image cap">
	    <div class="card-body">
	      <h4 class="card-title">Easy to Deploy</h4>
	      <p class="card-text">Installation is very simple, registered electrician can easily handle the job within couple of weeks for the size of a Five star hotel.</p>
	    </div>
	  </div>
	  <div class="card border-0">
	    <img class="card-img-top" src="/img/iot/use.png" alt="Card image cap">
	    <div class="card-body">
	      <h4 class="card-title">Simple to Use</h4>
	      <p class="card-text">User friendly interface, also customizable according to client request, management terminal can be a laptop, desktop or mobile phone. We also open API to serve your database.</p>
	    </div>
	  </div>
	</div>

	<div id="lns-prod-wrapper">
		<section class="lns-prod">
			<div class="prod-wrapper">
				<div class="image-wrapper">
					<div class="prod-image">
						<img src="/img/iot/product_01.png" alt="">
					</div>
				</div>
				<div class="prod-info-wrapper">
					<div class="prod-name">
						<h4>α Space Base Station</h4>
					</div>
					<div class="prod-spec">
						<table class="table">
							<thead>
								<tr>
									<th>&radic;</th>
									<th class="bg-light text-dark">Dimensions (L*W*H)</th>
									<th class="bg-secondary text-white">120mm x 120mm x 260mm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Weight</td>
									<td class="bg-secondary text-white">2.5 kg</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Power input</td>
									<td class="bg-secondary text-white">DC 12V / 1.5A</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Operating temperature</td>
									<td class="bg-secondary text-white">-40 &#x2103; ~+65 &#x2103;</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Commercial-Grade Protection</td>
									<td class="bg-secondary text-white">IP67</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Distance</td>
									<td class="bg-secondary text-white">Indoor 1-2km、Outdoor3-5km</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Installation Height</td>
									<td class="bg-secondary text-white">30m</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section class="lns-prod">
			<div class="prod-wrapper">
				<div class="image-wrapper">
					<div class="prod-image">
						<img src="/img/iot/product_02.png" alt="">
					</div>
				</div>
				<div class="prod-info-wrapper">
					<div class="prod-name">
						<h4>α Space Gateway</h4>
					</div>
					<div class="prod-spec">
						<table class="table">
							<thead>
								<tr>
									<th>&radic;</th>
									<th class="bg-light text-dark">Dimensions (L*W*H)</th>
									<th class="bg-secondary text-white">200mm x 120mm x 25mm</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Weight</td>
									<td class="bg-secondary text-white">1.0 kg</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Power input</td>
									<td class="bg-secondary text-white">DC 12V / 2A</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Operating temperature</td>
									<td class="bg-secondary text-white">-20 &#x2103; ~+55 &#x2103;</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Commercial-Grade Protection</td>
									<td class="bg-secondary text-white">IP54</td>
								</tr>
								<tr>
									<td>&radic;</td>
									<td class="bg-light text-dark">Distance</td>
									<td class="bg-secondary text-white">50 ~ 300m</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
@endsection