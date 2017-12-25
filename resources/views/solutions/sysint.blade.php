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
		<p class="sysint-intro">We provide advisory, solution and delivery services to customers across all market sectors. The service lines include consulting, systems integration, project management, deployment and managed services.</p>
	</div>
	<div class="sysint-func-wrapper">
		<p class="sysint-func-intro">Our Exclusive Integrated Solutions</p>
		<!-- Function 1 -->
		<figure class="figure">
		  <img src="/img/sysint/reservation.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Reservation</figcaption>
		</figure>
		<!-- Function 2 -->
		<figure class="figure">
		  <img src="/img/sysint/frontdesk.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Frontdesk</figcaption>
		</figure>
		<!-- Function 3 -->
		<figure class="figure">
		  <img src="/img/sysint/room-magt.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Room Management</figcaption>
		</figure>
		<!-- Function 4 -->
		<figure class="figure">
		  <img src="/img/sysint/room-service.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Room Services</figcaption>
		</figure>
		<!-- Function 5 -->
		<figure class="figure">
		  <img src="/img/sysint/customize.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
		  <figcaption class="figure-caption">Customization</figcaption>
		</figure>
	</div>
	<div class="sysint-img">
		<div class="sysint-coverimg">
			<p class="sysint-cover-text">One Stop Solution</p>
		</div>
	</div>
	<div id="sysint-card-wrapper">
		<div class="card-deck">
		  <div class="card border-primary mb-3">
		  	<div class="card-header text-primary">INITIATION</div>
		    <div class="card-body text-primary">
    			<p class="card-text">
    				<ul>
    					<li>Requirement Study</li>
    					<li>Prioritization and Sizing</li>
    					<li>Identify Stakeholders</li>
    					<li>Project Charter Approval</li>
    					<li>Project Governance</li>
    				</ul>
    			</p>
		    </div>
		  </div>
		  <div class="card border-danger mb-3">
		  	<div class="card-header text-danger">PLANNING</div>
		    <div class="card-body text-danger">
    			<p class="card-text">
    				<ul>
    					<li>Scope of Work Approval</li>
    					<li>Deliverables Defined</li>
    					<li>Schedule Approval</li>
    					<li>Budget Approval</li>
    					<li>Project Team Identified</li>
    					<li>Roles & Responsibilities</li>
    					<li>Project Plan Approval</li>
    					<li>Communication Plan</li>
    					<li>Quality Plan</li>
    				</ul>
    			</p>
		    </div>
		  </div>
		  <div class="card border-warning mb-3">
		  	<div class="card-header text-warning">EXECUTION</div>
		    <div class="card-body text-warning">
    			<p class="card-text">
    				<ul>
    					<li>Production of Deliverables</li>
    					<li>Deployment of Deliverables</li>
    					<li>Status Reporting</li>
    					<li>Scope of Work Management</li>
    					<li>Cost Management</li>
    					<li>Risk Management</li>
    					<li>Issue Resolution</li>
    					<li>Change Control</li>
    					<li>Communications</li>
    				</ul>
    			</p>
		    </div>
		  </div>
		  <div class="card border-info mb-3">
		  	<div class="card-header text-info">CLOSURE</div>
		    <div class="card-body text-info">
    			<p class="card-text">
    				<ul>
    					<li>Acceptance of Deliverables</li>
    					<li>Stakeholders Satisfaction</li>
    					<li>Training and Documentation</li>
    					<li>Archive Documentation </li>
    					<li>Customer and Team Feedback</li>
    					<li>Post Deployment Review</li>
    					<li>Next Recommendations</li>
    					<li>Contract and Project Closure</li>
    				</ul>
    			</p>
		    </div>
		  </div>
		</div>
	</div>
</section>
@endsection