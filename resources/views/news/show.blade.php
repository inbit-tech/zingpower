@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>{{ $zp_news->title }} - News - Zing Power</title>
@endsection

<!-- Custom CSS for News Article -->
@section ('custom-css')
<link href="{{ asset('/css/pages/newsinfo.css') }}" rel="stylesheet" />
@endsection

@section ('content')
<section id="news-article-wrapper">
	<!-- News article Header -->
	<div class="news-article-header">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">{{ $zp_news->title }}</h1>
				<p class="lead">{{ $zp_news->created_at }}</p>
			</div>
		</div>
	</div>

	<!-- News article body -->
	<div class="news-article-body">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 blog-main">
					<div class="blog-post">
						<img src="{{ $zp_news->imgurl }}" />
						<hr>
 						<p>{{ $zp_news->body }}</p>
					</div>
				</div>

				<div class="col-sm-3 offset-sm-1 blog-sidebar">
					<div class="sidebar-module sidebar-module-inset">
						<h4>About</h4>
						<p>Etiam porta mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
					</div>

					<div class="sidebar-module">
						<h4>Follow Us</h4>
						<ol class="list-unstyled">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Instagram</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection