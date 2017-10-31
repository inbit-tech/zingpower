@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Device Management System - Solutions - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/dms.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
	<div class="cover-image">
		<p class="cover-text">Device Management System</p>
	</div>
</section>

<section id="content-wrapper">
	<div class="dms-cover">
		<div class="dms-cover-image"></div>
	</div>
	<div class="row align-items-center justify-content-center">
		<div class="dms-func-interface">
			<img src="/img/dms/interface_01.jpg" alt="">
		</div>
		<div class="dms-func-interface">
			<ul class="list-group">
				<li class="list-group-item">Set a single default app to run all the time. </li>
				<li class="list-group-item">Authorize specific applications to use. </li>
				<li class="list-group-item">Restrict access to WiFi connection.</li>
				<li class="list-group-item">Upgrade system/application Over-The-Air (OTA).</li>
				<li class="list-group-item">Remotely buzz the device to ring instantly.</li>
				<li class="list-group-item">Remotely wipe sensitive information on the device.</li>
				<li class="list-group-item">Password protected to prevent modifications.</li>
			</ul>
		</div>
	</div>
	<div class="dms-func-img-wrapper">
		<div class="dms-func-img"></div>
	</div>
	<div>
		<p>Why Choose Our Solution</p>
	</div>
	<table class="table mx-auto">
	  	<thead>
		    <tr>
				<th scope="col">Items</th>
				<th scope="col">Traditional Smart Solution</th>
				<th scope="col">Our Smart Solution</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  		<tr>
	  			<td colspan="3">Hardware</td>
	  		</tr>
			<tr>
				<td>Cabling</td>
				<td>KNS or CAT6E type of cable through out the property</td>
				<td>None</td>
			</tr>
			<tr>
				<td>Gateway Modules</td>
				<td>Yes</td>
				<td>None</td>
			</tr>
			<tr>
				<td>Pad/Mobile</td>
				<td>Yes</td>
				<td>Yes</td>
			</tr>
			<tr>
				<td>Execution Modules</td>
				<td>Yes</td>
				<td>None</td>
			</tr>
			<tr>
				<td>Wall panels</td>
				<td>Yes</td>
				<td>None</td>
			</tr>
			<tr>
				<td>Power distribution box</td>
				<td>Yes</td>
				<td>None</td>
			</tr>
			<tr>
	  			<td colspan="3">System</td>
	  		</tr>
	  		<tr>
				<td>Device Management System</td>
				<td>None</td>
				<td>Yes, customized</td>
			</tr>
			<tr>
				<td>Hardware management</td>
				<td>Per item basis</td>
				<td>All device managed by DMS</td>
			</tr>
			<tr>
				<td>Control APP</td>
				<td>Yes, standard</td>
				<td>Yes, customized</td>
			</tr>
			<tr>
				<td>Customization Level</td>
				<td>Almost none, key components has to be KNS, Crestron or Control4 authorized products</td>
				<td>Full customization from hardware to software</td>
			</tr>
			<tr>
	  			<td colspan="3">Installation & Maintenance</td>
	  		</tr>
	  		<tr>
				<td>Room down time</td>
				<td>2 to 3 months depends on hotel size</td>
				<td>None</td>
			</tr>
			<tr>
				<td>Hardware maintenance</td>
				<td>Complicated hardware system requires team of professionals to manage the maintenance</td>
				<td>Phone, replace when fault and its charged automatically</td>
			</tr>
			<tr>
				<td>Adaptability</td>
				<td>Prefer new hotel at construction time</td>
				<td>Either new or old hotel, and at any stage</td>
			</tr>
	  </tbody>
	</table>
</section>
@endsection