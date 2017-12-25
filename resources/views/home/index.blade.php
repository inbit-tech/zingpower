@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/room-ctrl.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/room-line.css') }}">
@endsection

@section ('content')
{{-- Add Room Controller Interactive Module --}}
<section id="cover-wrapper" class="d-flex justify-content-center">
    <div class="room-ctrl-container">
        <img src="/img/room-ctrl/original.jpg" alt="" id="room-ctrl-original-img">
        
        {{--  in room-control phone container click each icon after this change corresponding img display --}}
        <img src="/img/room-ctrl/room-ctrl-air-wind.png" id="icon-air-click-after-img" class="icon-click-after-img opacity0">
        <img src="/img/room-ctrl/room-ctrl-tv-light.png" id="icon-tv-click-after-img" class="icon-click-after-img opacity0">
        <img src="/img/room-ctrl/room-ctrl-curtain-open.png" id="icon-curtain-click-after-img" class="icon-click-after-img opacity0">

        {{-- dinning car --}}
        <img src="/img/room-ctrl/room-ctrl-hotel-ser.png" alt="" id="room-ctrl-hotel-ser" class="opacity0">

        {{-- in light-control phone container click each icon after this change corresponding img display --}}
        <img src="/img/room-ctrl/room-ctrl-bed-light-open.png" id="icon-bed-light-click-after-img" class="icon-click-after-img opacity0">
        <img src="/img/room-ctrl/room-ctrl-main-light-open.png" id="icon-main-light-click-after-img" class="icon-click-after-img opacity0">
        <img src="/img/room-ctrl/room-ctrl-office-light-open.png" id="icon-office-light-click-after-img" class="icon-click-after-img opacity0">

        {{-- light control  phone container --}}
        <div id="room-ctrl-phone-container-light-ctrl" style="display: none;">
            <img src="/img/room-ctrl/phone.png" alt="" id="room-ctrl-phone">
            <img src="/img/room-ctrl/phone/phone-bg.png" alt="" id="room-ctrl-phone-bg">
            <img src="img/room-ctrl/phone/light-ctrl/callback.png" alt="" id="light-ctrl-icon-callback">
            <p id="light-ctrl-text">LIGHT CONTROL</p>
            <img src="img/room-ctrl/phone/light-ctrl/bed-light.png" alt="" id="bed-light">
            <img src="img/room-ctrl/phone/light-ctrl/main-light.png" alt="" id="main-light">
            <img src="img/room-ctrl/phone/light-ctrl/bathroom-light.png" alt="" id="bathroom-light">
            <img src="img/room-ctrl/phone/light-ctrl/office-light.png" alt="" id="office-light">
            <img src="img/room-ctrl/phone/light-ctrl/ground-light.png" alt="" id="ground-light">
            <img src="img/room-ctrl/phone/light-ctrl/corridor-light.png" alt="" id="corridor-light">
        </div>

        {{-- room control  phone container --}}
        <div id="room-ctrl-phone-container-room-ctrl" style="display: none;">
            <img src="/img/room-ctrl/phone.png" alt="" id="room-ctrl-phone">
            <img src="/img/room-ctrl/phone/phone-bg.png" alt="" id="room-ctrl-phone-bg">
            <img src="img/room-ctrl/phone/light-ctrl/callback.png" alt="" id="room-ctrl-icon-callback">
            <p id="room-ser-text">ROOM CONTROL</p>
            <img src="/img/room-ctrl/phone/phone-room-ctrl-icon.png" alt="" id="phone-room-ctrl-icon">
            <img src="/img/room-ctrl/phone/phone-room-ctrl-icon-air.png" alt="" id="phone-room-ctrl-icon-air">
            <img src="/img/room-ctrl/phone/phone-room-ctrl-icon-light.png" alt="" id="phone-room-ctrl-icon-light">
            <img src="/img/room-ctrl/phone/phone-room-ctrl-icon-tv.png" alt="" id="phone-room-ctrl-icon-tv">
            <img src="/img/room-ctrl/phone/phone-room-ctrl-icon-curtain.png" alt="" id="phone-room-ctrl-icon-curtain">
        </div>

        {{-- hotel-services and room-services phone container --}}
        <div id="room-ctrl-phone-container-hotel-ser" style="display: none;">
            <img src="/img/room-ctrl/phone.png" alt="" id="room-ctrl-phone">
            <img src="/img/room-ctrl/phone/phone-bg.png" alt="" id="room-ctrl-phone-bg">
            <img src="/img/room-ctrl/phone/phone-ctrl-icon-gray.png" alt="" id="room-ctrl-phone-ctrl-option">
            <img src="/img/room-ctrl/phone/phone-ctrl-hotel-ser-origin.png" alt="" id="room-ctrl-phone-ctrl-hotel-ser">
            <img src="/img/room-ctrl/phone/phone-ctrl-room-ser-origin.png" alt="" id="room-ctrl-phone-ctrl-room-ser">
            <img src="/img/room-ctrl/phone/phone-ctrl-open-btn.png" alt="" id="room-ctrl-phone-ctrl-open-btn">
        </div> 

        <img src="/img/room-ctrl/room-ctrl-init-btn.png" alt="" id="room-ctrl-init-btn">
    </div>
</section>

{{-- products area HTML --}}

<div class="products-wrapper row mx-auto">
    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Walkie Talkie</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="text-center"><a href="">Learn More ></a></p>
            </div>
            <img class="card-img-bottom" src="/img/home/walkie-talkie.png" alt="Card image cap">
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Wireless Charger</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="text-center"><a href="">Learn More ></a></p>
            </div>
            <img class="card-img-bottom" src="/img/home/wireless-charger.png" alt="Card image cap">
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Room Control Unit</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="text-center"><a href="">Learn More ></a></p>
            </div>
            <img class="card-img-bottom" src="/img/home/room-control-unit.png" alt="Card image cap">
        </div>
    </div>
</div>

{{-- SystemIntegration area HTML --}}
<div id="sip-particles" class="sysint-wrapper color-gradient">
    <div id="sip-intro">
        <h1>System Integration</h1>
        <p>Our exclusive solution includes combinations of smart devices, apps, backend system, database and etc, it is customizable to match each customers' unique requirements. </p>
        <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='/solutions/system-integration'" id="si-btn">Learn More</button>
    </div>
</div>

<div id="mission-wrapper">
    <div id="mission-content-wrapper">
        <h1>ZERO DOWNTIME</h1>
        <p>ZingPower solution deployment without business interruption</p>
        <button type="button" class="btn btn-outline-primary btn-lg" onclick="window.location.href='/products/smart-room-controller'" id="mission-btn">Learn More</button>
    </div>
</div>

{{-- Wireframe Interaction Module area HTML --}}
<div class="zing-scheme d-flex justify-content-center">
    <div class="room-container">

        {{-- third view layer include  room-scenograph image and line image init-house icon two button --}}
        <img src="/img/homepage/room-scenograph.jpg" alt="" id="room-scenograph" class="opacity0">
        <img src="/img/homepage/room-line.png" alt="" id="room-line" class="opacity0">
        <img src="/img/homepage/init-house.png" alt="" id="init-house" class="opacity0">
        <img src="/img/homepage/room-button-red.png" alt="" id="room-button-red-alone" class="opacity0">
        <div id="zingpower-tip-text-hold-on" class="tip-text-hold-on opacity0">Hold On to Check ZingPower Solution</div>
        <div id="zingpower-tip-text-release" class="tip-text-release opacity0">Release to Go Back Regular Solution</div>
        <img src="/img/homepage/room-button-green.png" alt="" id="room-button-green-alone" class="opacity0">
        <div id="regular-tip-text-hold-on" class="tip-text-hold-on opacity0">Hold On to Check Regular Solution</div>
        <div id="regular-tip-text-release" class="tip-text-release opacity0">Release to Go Back ZingPower Solution</div>

        {{-- secound view layer include room-line-helf image and two button --}}
        <img src="/img/homepage/room-line-helf.png" alt="" id="room-line-helf" class="opacity0">
        <img src="/img/homepage/room-button-red.png"" alt="" id="room-button-red" class="opacity0">
        <img src="/img/homepage/room-button-green.png"" alt="" id="room-button-green" class="opacity0">

        {{-- original view layer include room image and rolling-container --}}
        <img src="/img/homepage/room.jpg" alt="" id="room" class="opacity100">
        <div class="rolling-container">
            <img src="/img/homepage/icons8-visible.png" alt="" id="room-icon-eye">
            <canvas id="room-icon-circular" width="220" height="220">
            Your browser does not support technology the site implement; please consider an upgrade to modern browsers like Google Chrome or Firefox!
            </canvas>
            <p class="room-text">Check In</p>   
        </div>
        
    </div>
</div>

{{-- client area HTML --}}
<div class="client-wrapper">
    <h1>Our Clients</h1>
    <div class="client-showcase">
        <table class="client-table">
            <tbody>
                <tr>
                    <td>
                        <img src="/img/home/client_logo01.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo02.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo03.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo04.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo05.jpg" alt="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/home/client_logo06.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo07.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo08.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo09.jpg" alt="">
                    </td>
                    <td>
                        <img src="/img/home/client_logo10.jpg" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section ('custom-js')
<script src="{{ asset('/js/jquery.particleground.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('/js/pages/home.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script src="{{ asset('/js/pages/home-wireframe.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/pages/room-ctrl-module.js') }}" type="text/javascript"></script>
@endsection

