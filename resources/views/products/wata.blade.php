@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Walkie Talkie - Products - Zing Power</title>
@endsection

<!-- Custom CSS for walkie talkie Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/wata.css') }}" rel="stylesheet">
@endsection

@section ('content')
<!-- Cover Image -->
<section id="cover-wrapper">
  <div class="cover-image">
    <p class="cover-text">Connect and Talk</p>
  </div>
</section>

<!-- Content Link -->
<section id="wata-wrapper">
  <div class="walkie-talkie mx-auto">
    <div class="wata-bg-wrapper">
      <h1>The capacity to increase your scope</h1>
      <div class="wata-bg-1"></div>
    </div>
    <div class="wata-bg-wrapper">
      <h1>There is a story in every detail</h1>
      <div class="wata-bg-2"></div>
    </div>
    <div class="wata-bg-wrapper">
      <h1>Help you save time to get more power</h1>
      <div class="wata-bg-3"></div>
    </div>
  </div>
</section>

@endsection