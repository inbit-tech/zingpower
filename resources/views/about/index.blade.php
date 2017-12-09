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

@endsection