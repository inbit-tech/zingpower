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
    <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='/solutions/system-integration'">Learn More</button>
</div>

<div class="dms-wrapper row mx-auto">
    <img class="dms-device" src="/img/home/dms_default.png" id="dms-bg" alt="" />
    <div class="dms-device-intro">
        <h2>Device Management System</h2>
        <table class="table borderless">
            <tbody>
                <tr class="hotel-service-list">
                    <td>
                        <a href="" class="dms-menu-link">
                        <img src="/img/home/icon_main_menu.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-room-service-link">
                        <img src="/img/home/icon_room_service.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-service-link">
                        <img src="/img/home/icon_service.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-hotel-link">
                        <img src="/img/home/icon_hotel.png" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="" class="dms-aircon-link">
                        <img src="/img/home/icon_aircon.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-light-link">
                        <img src="/img/home/icon_light.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-curtain-link">
                        <img src="/img/home/icon_curtain.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-room-control-link">
                        <img src="/img/home/icon_room_control.png" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="" class="dms-tv-control-link">
                        <img src="/img/home/icon_tv_control.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-room-clean-link">
                        <img src="/img/home/icon_room_clean.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-food-link">
                        <img src="/img/home/icon_food.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="" class="dms-concierge-link">
                        <img src="/img/home/icon_concierge.png" alt="">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="video-wrapper">
    <video playsinline autoplay muted loop poster="/img/home/home-video-cover.jpg" id="zero-bg-video">
        <source src="//otyhzy70j.bkt.clouddn.com/hotel-deco.mp4" type="video/mp4">
    </video>
    <div class="text-overlay justify-content-center">
        <p>Zero Downtime Deployment</p>
        <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='/solutions/dms'">Learn More</button>
    </div>
</div>

{{-- client area HTML --}}
<div class="client-wrapper">
    <div class="d-flex flex-column align-items-center">
        <h1 class="txt_our_clients">Our Clients Are Saving</h1>
        <h2 class="number">$ 123,456,789</h2>
    </div>
    <div class="d-flex flex-wrap justify-content-around align-items-center w-50">
        <img src="/img/home/logo_1.png" alt="" class="client_logo rounded-circle" style="width: 50px;">
        <img src="/img/home/logo_2.png" alt="" class="client_logo rounded-circle" style="width: 50px;">
        <img src="/img/home/logo_3.png" alt="" class="client_logo rounded-circle" style="width: 50px;">
        <img src="/img/home/logo_4.png" alt="" class="client_logo rounded-circle" style="width: 50px;">
        <img src="/img/home/logo_5.png" alt="" class="client_logo rounded-circle" style="width: 50px;">
    </div>
</div>

@endsection

@section ('custom-js')
<script src="{{ asset('/js/pages/home.js') }}" type="text/javascript" charset="utf-8" async defer></script>
@endsection

