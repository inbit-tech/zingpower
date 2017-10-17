@extends ('master')

@section ('custom-css')
<link href="{{ asset('/css/pages/about.css') }}" rel="stylesheet" />
@endsection

@section ('content')
<!-- Header image include page title -->
<div class="jumbotron jumbotron-fluid">
	<div class="container-fluid">
		<h2 class="display-4 text-center">Know More About Us</h2>
	</div>
</div>

<!-- Current Year Content -->
<div class="container-fluid">
	<h3 class="text-center">2017</h3>
	<h3 class="text-center">"Our greatest motivation in life comes from not knowing the future"</h3>
</div>

<!-- Featured image about zingpower -->
<div class="container-fluid text-center">
	<img src="https://placeimg.com/1120/500/tech" class="img-fluid" alt="">
</div>

<!-- History Content -->
<div class="container-fluid">
	<!-- Row 1 -->
	<div class="row align-items-center text-center">
		<div class="col">
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
	</div>
	<!-- Row 2 -->
	<div class="row align-items-center text-center">
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
		<div class="col">
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
	</div>
	<!-- Row 3 -->
	<div class="row align-items-center text-center">
		<div class="col">
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
	</div>
	<!-- Row 4 -->
	<div class="row align-items-center text-center">
		<div class="col">
			<img src="https://placeimg.com/450/200/any" alt="">
		</div>
		<div class="col">
			<p>
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident
			</p>
		</div>
	</div>
</div>

<div class="container-fluid text-center">
	<h4 class="display-4">2009</h4>
</div>

@endsection