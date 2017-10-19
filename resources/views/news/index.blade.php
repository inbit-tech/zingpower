@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>News - Zing Power</title>
@endsection

<!-- Custom CSS for News Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/news.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://placeimg.com/1280/380/tech" alt="">
			<div class="carousel-caption d-none d-md-block">
				<h2>Slide 1</h2>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://placeimg.com/1280/380/people" alt="">
			<div class="carousel-caption d-none d-md-block">
				<h2>Slide 2</h2>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://placeimg.com/1280/380/nature" alt="">
			<div class="carousel-caption d-none d-md-block">
				<h2>Slide 3</h2>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- News List -->
@foreach ($zp_news as $news)
<section id="news">
	<div class="news-wrapper clearfix">
		<div class="news-image">
			<img src="{{ $news->imgurl }}" alt="">
		</div>
		<div class="news-info">
			<div class="news-date">
				<p>{{ $news->created_at}}</p>
			</div>
			<div class="news-title">
				<p>{{ $news->title }}</p>
			</div>
			<div class="news-summary">
				<p>{{ $news->summary }}</p>
			</div>
			<div class="news-btn">
				<span>
					<button type="button" class="btn btn-info">Read More</button>
				</span>
			</div>
		</div>
	</div>
</section>
@endforeach
@endsection