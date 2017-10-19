@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>{{ $zp_news->title }} - News - Zing Power</title>
@endsection

<!-- Custom CSS for News Article -->
@section ('custom-css')
<link href="{{ asset('/css/pages/news-show.css') }}" rel="stylesheet">
@endsection

@section ('content')
<h1>{{ $zp_news->title }}</h1>
@endsection