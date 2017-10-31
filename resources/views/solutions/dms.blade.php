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
	<div class="cover-image"></div>
</section>

<section id="content-wrapper">
	<div class="dms-cover">
		<div class="dms-cover-image"></div>
	</div>
	<div class="dms-func-wrapper">
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
	<div class="dms-func-img-wrapper">
		<div class="dms-func-img"></div>
	</div>
	<div class="dms-comp-table mx-auto">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Username</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>

		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Username</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</section>
@endsection