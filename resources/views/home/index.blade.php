@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/home.css') }}">
@endsection

@section ('content')
{{-- Slider with Products + Solutions --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/home/cover-room.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Room</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/home/cover-curtain.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Curtain</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/home/cover-tv.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Television</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/home/cover-light.jpg" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Light</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/home/cover-music.jpg" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Music</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/home/cover-rs.jpg" alt="Sixth slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Room Service</h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- products area HTML --}}
<div class="d-flex flex-wrap">
    <div class="d-flex flex-column align-items-center icon_phone">
        <img src="http://placeimg.com/125/125/tech" alt=""  class=" rounded-circle"><p class="icon_txt_phone">Mobile Phone</p>
    </div>
    <div class="d-flex flex-column align-items-center icon_talkie">
        <img src="http://placeimg.com/125/125/people" alt=""  class=" rounded-circle"><p class="icon_txt_talkie">Walkie Talkie</p>
    </div>
    <div class="d-flex flex-column align-items-center icon_charger">
        <img src="http://placeimg.com/125/125/nature" alt=""  class=" rounded-circle"><p class="icon_txt_charger">Wireless Charger</p>
    </div>
    <div class="d-flex flex-column align-items-center icon_controller"> 
        <img src="http://placeimg.com/125/125/any" alt=""  class=" rounded-circle"><p class="icon_txt_controller">Smart Controller</p>
    </div>
</div>

{{-- SystemIntegration area HTML --}}
<div class="m-b-30">
    <div class="card-xl text-white">
        <img src="/img/home/img_system.jpg" class="card-img img_system" alt="Card image">
        <div class="d-flex flex-column justify-content-center align-items-start card-img-overlay-xl width-25 card-img-overlay-sm color-black-sm m-l-200">
            <h3 class="txt_integration_title">System Integration</h3>
            <p class="General-introduction">General introduction info about system integration functionality</p>
            <button type="" class="btn btn-success btn-sm">Learn More</button>
        </div>
    </div>
</div>


<div class="m-b-30">
    <div class="d-flex flex-wrap justify-content-around">
        <img src="http://placeimg.com/350/500/any" alt="" class="m-l-93">
        <div class="d-flex flex-column justify-content-around ">
            <h3 class="txt_one_device">One Device to Rule Them All</h3>
            <p class="General-infomation-a">General  information about Device Management System Zero downtime implementation.</p>
            <button type="" class="btn btn-warning text-white ml-auto p-2">Learn More</button>
        </div>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="/img/home/zerowire.jpg" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-text ZERO-DOWN-ZERO-WIRE">ZERO DOWN</h1>
            <h1 class="card-text ZERO-DOWN-ZERO-WIRE">ZERO WIRE</h1>
        </div>
    </div>
</div>

{{-- client area HTML --}}
<div class="m-b-30 d-flex flex-column align-items-center">
    <div class="d-flex flex-column align-items-center">
        <h1 class="txt_our_clients">Our Clients Are Saving</h1>
        <h2 class="number">$ 123,456,789</h2>
    </div>
    <div class="d-flex flex-wrap justify-content-around align-items-center w-50">
        <img src="/img/home/logo_1.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_2.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_3.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_4.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_5.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_1.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_2.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_3.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_4.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_5.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_1.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_2.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_3.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_4.png" alt=""  class="client_logo rounded-circle">
        <img src="/img/home/logo_5.png" alt=""  class="client_logo rounded-circle">
    </div>
</div>

@endsection


