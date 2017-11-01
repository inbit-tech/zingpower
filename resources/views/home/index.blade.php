@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/homepage.css') }}">
@endsection

@section ('content')
{{-- top area HTML --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/640/480/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-text txt_slogan">Make Your Space Alive</h1> 
            <button type="" class="btn btn-primary btn_learnmore">Learn More</button>
        </div>
    </div>
</div>


{{-- products area HTML --}}
<div class="d-flex flex-wrap justify-content-around my-5 mx-5 px-5">
    <div class="d-flex flex-column align-items-center">
        <img src="http://placeimg.com/125/125/tech" alt=""  class=" rounded-circle"><p class="mt-4">Mobile Phone</p>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="http://placeimg.com/125/125/people" alt=""  class=" rounded-circle"><p class="mt-4">Walkie Talkie</p>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="http://placeimg.com/125/125/nature" alt=""  class=" rounded-circle"><p class="mt-4">Wireless Charger</p>
    </div>
    <div class="d-flex flex-column align-items-center"> 
        <img src="http://placeimg.com/125/125/any" alt=""  class=" rounded-circle"><p class="mt-4">Smart Controller</p>
    </div>
</div>

{{-- SystemIntegration area HTML --}}
<div class="m-b-30">
    <div class="card-xl text-white">
        <img src="http://placeimg.com/1500/400/any" class="card-img" alt="Card image">
        <div class="d-flex flex-column justify-content-center align-items-start card-img-overlay-xl width-25 card-img-overlay-sm color-black-sm m-l-200">
            <h3 class="txt_integration_title">System Integration</h3>
            <p class="General-introduction">General introduction info about system integration functionality</p>
            <button type="" class="btn btn-success btn-sm">Learn More</button>
        </div>
    </div>
</div>


<div class="m-b-30">
    <div class="d-flex flex-wrap justify-content-around">
        <img src="http://placeimg.com/350/500/any" alt="" class="">
        <div class="d-flex flex-column justify-content-around padding-sm">
            <h3 class="font-weight-bold">One Device to Rule Them All</h3>
            <p>General  information about Device Management System Zero downtime implementation.</p>
            <button type="" class="btn btn-warning text-white ml-auto p-2">Learn More</button>
        </div>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/640/480/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-text font-weight-bold">ZERO DOWN</h1>
            <h1 class="card-text font-weight-bold">ZERO WIRE</h1>
        </div>
    </div>
</div>

{{-- client area HTML --}}
<div class="m-b-30 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <h1 class="font-weight-bold">Our Clients Are Saving</h1>
        <h2 class="font-weight-bold">$ 123,456,789</h2>
    </div>
    <div class="d-flex flex-wrap justify-content-around align-items-center w-50">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
        <img src="http://via.digital.com/120x120" alt=""  class=" rounded-circle">
    </div>
</div>

@endsection


