@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Walkie Talkie - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/wata.css') }}" rel="stylesheet">
@endsection

@section ('content')
{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/640/300/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1>Walkie Talkie</h1>
        </div>
    </div>
</div>

{{-- text --}}
<div class="m-b-30 p-5 d-flex flex-wrap justify-content-center">
    <p  class="w-50">Our radios are suitable for use in shopping malls, schools, colleges, hotels, bars & pubs, nightclubs, door supervisors, farms, garden centers, warehouses, factories, general security work, and for outdoor activities including skiing, paintball, cycling, running etc.</p>
</div>

{{-- carousel --}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://placeimg.com/640/200/people" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placeimg.com/640/200/tech" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placeimg.com/640/200/any" alt="Third slide">
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

{{-- img item --}}
<div class="m-b-30 d-flex flex-wrap justify-content-center">
    <div class="p-4 d-flex justify-content-between flex-column align-items-center">
        <img src="http://placeimg.com/200/200/animals" alt="" class="rounded-circle">
        <p>Radios</p>
    </div>

    <div class="p-4 d-flex justify-content-between flex-column align-items-center">
        <img src="http://placeimg.com/200/200/nature" alt="" class="rounded-circle">
        <p>Accessories</p>
    </div>

    <div class="p-4 d-flex justify-content-between flex-column align-items-center">
        <img src="http://placeimg.com/200/200/architecture" alt="" class="rounded-circle">
        <p>2-Way Radios</p>
    </div>
</div>
@endsection