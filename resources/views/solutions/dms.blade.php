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
	<div class="table-title">
		<p>Why Choose Our Solution</p>
	</div>
	<table class="table mx-auto border">
	  	<thead>
		    <tr>
				<th class="border bg-light text-dark" scope="col">Items</th>
				<th class="border bg-secondary text-white" scope="col">Traditional Smart Solution</th>
				<th class="border bg-primary text-white" scope="col">Our Smart Solution</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  		<tr class="table-row-header">
	  			<td class="border" colspan="3">Hardware</td>
	  		</tr>
			<tr>
				<td class="border bg-light text-dark">Cabling</td>
				<td class="border bg-secondary text-white">KNS or CAT6E type of cable through out the property</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Gateway Modules</td>
				<td class="border bg-secondary text-white">Yes</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Pad/Mobile</td>
				<td class="border bg-secondary text-white">Yes</td>
				<td class="border bg-primary text-white">Yes</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Execution Modules</td>
				<td class="border bg-secondary text-white">Yes</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Wall panels</td>
				<td class="border bg-secondary text-white">Yes</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Power distribution box</td>
				<td class="border bg-secondary text-white">Yes</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr class="table-row-header">
	  			<td class="border" colspan="3">System</td>
	  		</tr>
	  		<tr>
				<td class="border bg-light text-dark">Device Management System</td>
				<td class="border bg-secondary text-white">None</td>
				<td class="border bg-primary text-white">Yes, customized</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Hardware management</td>
				<td class="border bg-secondary text-white">Per item basis</td>
				<td class="border bg-primary text-white">All device managed by DMS</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Control APP</td>
				<td class="border bg-secondary text-white">Yes, standard</td>
				<td class="border bg-primary text-white">Yes, customized</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Customization Level</td>
				<td class="border bg-secondary text-white">Almost none, key components has to be KNS, Crestron or Control4 authorized products</td>
				<td class="border bg-primary text-white">Full customization from hardware to software</td>
			</tr>
			<tr class="table-row-header">
	  			<td class="border" colspan="3">Installation & Maintenance</td>
	  		</tr>
	  		<tr>
				<td class="border bg-light text-dark">Room down time</td>
				<td class="border bg-secondary text-white">2 to 3 months depends on hotel size</td>
				<td class="border bg-primary text-white">None</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Hardware maintenance</td>
				<td class="border bg-secondary text-white">Complicated hardware system requires team of professionals to manage the maintenance</td>
				<td class="border bg-primary text-white">Phone, replace when fault and its charged automatically</td>
			</tr>
			<tr>
				<td class="border bg-light text-dark">Adaptability</td>
				<td class="border bg-secondary text-white">Prefer new hotel at construction time</td>
				<td class="border bg-primary text-white">Either new or old hotel, and at any stage</td>
			</tr>
	  </tbody>
	</table>
</section>
@endsection