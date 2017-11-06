@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/home.css') }}">
@endsection

@section ('content')
<section id="cover-wrapper">
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
                <div class="ad1 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Make Your Space Alive
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ad2 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Open Your Curtain
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ad3 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Enjoy Your TV Show
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ad4 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Turn On Your Light
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ad5 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Play Your Music
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ad6 cover-img">
                    <p class="cover-img-text">
                        <img src="/img/home/icon_iphone.png" alt="">
                        Order Your Room Service
                    </p>
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
</section>

{{-- products area HTML --}}
<div class="home-prod-wrapper">
    <figure class="figure">
        <a href="/products/mobile-phone">
            <img src="/img/home/icon_phone.png" class="figure-img img-fluid rounded" alt="">
        </a>
        <figcaption class="figure-caption">
            <a href="/products/mobile-phone">Mobile Phone</a>
        </figcaption>
    </figure>
    <figure class="figure">
        <a href="/products/walkie-talkie">
            <img src="/img/home/icon_talkie.png" class="figure-img img-fluid rounded" alt="">
        </a>
        <figcaption class="figure-caption">
            <a href="/products/walkie-talkie">Walkie Talkie</a>
        </figcaption>
    </figure>
    <figure class="figure">
        <a href="/products/wireless-charger">
            <img src="/img/home/icon_charge.png" class="figure-img img-fluid rounded" alt="">
        </a>
        <figcaption class="figure-caption">
            <a href="/products/wireless-charger">Wireless Charger</a>
        </figcaption>
    </figure>
    <figure class="figure">
        <a href="/products/smart-room-controller">
            <img src="/img/home/icon_controller.png" class="figure-img img-fluid rounded" alt="">
        </a>
        <figcaption class="figure-caption">
            <a href="/products/smart-room-controller">Smart Room Controller</a>
        </figcaption>
    </figure>
</div>

{{-- SystemIntegration area HTML --}}
<div class="sysint-wrapper color-gradient">
    <h1 class="sysint-title">System Integration</h1>
    <p class="sysint-intro mx-auto">Our exclusive solution includes combinations of smart devices, apps, backend system, database and etc, it is customizable to match each customers' unique requirements. </p>
    <button type="button" class="btn btn-outline-light btn-lg">Learn More</button>
</div>

<div class="">
    <div class="d-flex flex-wrap justify-content-around">
        <img src="http://placeimg.com/350/500/any" alt="" class="m-l-93">
        <div class="d-flex flex-column justify-content-around ">
            <h3 class="txt_one_device">One Device to Rule Them All</h3>
            <p class="General-infomation-a">General  information about Device Management System Zero downtime implementation.</p>
        </div>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="">
    <div class="card text-white">
        <img src="/img/home/zerowire.jpg" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="card-text ZERO-DOWN-ZERO-WIRE">ZERO DOWN</h1>
            <h1 class="card-text ZERO-DOWN-ZERO-WIRE">ZERO WIRE</h1>
        </div>
    </div>
</div>

{{-- client area HTML --}}
<div class="d-flex flex-column align-items-center">
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

@section ('custom-js')

@endsection

