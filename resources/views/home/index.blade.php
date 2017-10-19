@extends ('master')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/homepage.css') }}">
@endsection

@section ('content')
{{-- top area HTML --}}
<div class="content">
    <div class="card text-white">
        <img src="http://via.digital.com/1500x1000" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <p class="card-text font-weight-bold">Make Your Space Alive</p> 
            <button type="" class="btn btn-primary btn-lg">Learn More</button>
        </div>
    </div>
</div>


{{-- products area HTML --}}
<div class="content d-flex justify-content-around">
    <div class="d-flex flex-column align-items-center">
        <img src="http://via.digital.com/150x150" alt=""  class="img-circle"><p>Mobile Phone</p>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="http://via.digital.com/150x150" alt=""  class="img-circle"><p>Walkie Talkie</p>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="http://via.digital.com/150x150" alt=""  class="img-circle"><p>Wireless Charger</p>
    </div>
    <div class="d-flex flex-column align-items-center"> 
        <img src="http://via.digital.com/150x150" alt=""  class="img-circle"><p>Smart Controller</p>
    </div>
</div>

{{-- SystemIntegration area HTML --}}

<div class="content">
    <div class="card text-white">
        <img class="card-img" src="http://via.digital.com/1500x300" alt="Card image">
        <div class="card-img-overlay w-25 p-3 d-flex flex-column justify-content-center d-flex align-items-start">
            <h4 class="card-title">System Integration</h4>
            <p class="card-text">General introduction info about system integration functionality</p>
            <button type="" class="btn btn-success btn-xl">Learn More</button>
        </div>
    </div>
</div>


<div class="content">
    <div class="d-flex justify-content-around">
        <img src="http://via.digital.com/350x500" alt="">
        <div class="d-flex flex-column justify-content-around">
            <h1><strong>One Device to Rule Them All</strong></h1>
            <hr>
            <p>General  information about Device Management System Zero downtime implementation.</p>
            <div class="row">
                <div class="col-6 col-md-4"></div>
                <div class="col-6 col-md-4"></div>
                <div class="col-6 col-md-4">
                    <button type="" class="btn btn-warning" style="color: white;">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="content">
    <div class="card text-white">
        <img src="http://via.digital.com/1500x1000" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <p><strong>ZERO DOWN</strong></p>
            <p><strong>ZERO WIRE</strong></p>
        </div>
    </div>
</div>

{{-- client area HTML --}}
<div class="content d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <h1>Our Clients Are Saving</h1>
        <h2>$ 123,456,789</h2>
    </div>
    <div class="d-flex flex-xl-wrap justify-content-around align-items-center w-50">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
        <img src="http://via.digital.com/120x120" alt=""  class="img-circle">
    </div>
</div>

@endsection


