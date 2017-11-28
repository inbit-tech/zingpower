@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/room-line.css') }}">
@endsection

@section ('content')
{{-- Add Room Controller Interactive Module --}}
<section id="cover-wrapper" class="d-flex justify-content-center">
    <div class="room-ctrl-module-container">
        <img src="/img/room-ctrl/original.jpg" alt="" id="room-ctrl-original-img">
        <img src="/img/room-ctrl/logo.png" alt="" id="room-ctrl-logo">
        <img src="/img/room-ctrl/phone-ctrl.png" alt="" id="room-ctrl-phone-ctrl">
        <img src="/img/room-ctrl/rolling.png" alt="" id="room-ctrl-rolling" class="opacity-20">
        <img src="/img/room-ctrl/icon-finger.png" alt="" id="room-ctrl-icon-finger">
        <div id="room-ctrl-tip-text-container">
            <p id="room-ctrl-tip-text">click to control the room</p>            
        </div>
        <div id="room-ctrl-module-phone-container">
        </div> 
    </div>
</section>

{{-- products area HTML --}}
<div id="vision-wrapper">

</div>

{{-- SystemIntegration area HTML --}}
<div id="sip-particles" class="sysint-wrapper color-gradient">
    <div id="sip-intro">
        <h1>System Integration</h1>
        <p>Our exclusive solution includes combinations of smart devices, apps, backend system, database and etc, it is customizable to match each customers' unique requirements. </p>
        <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='/solutions/system-integration'">Learn More</button>
    </div>
</div>

<div class="custom-wrapper row mx-auto">
    
</div>

{{-- Wireframe Interaction Module area HTML --}}
<div class="zing-scheme d-flex justify-content-center">
    <div class="room-container">
        <img src="/img/homepage/room-line-helf.png" alt="" id="room-line-helf">
        <img src="/img/homepage/room-button-red.png"" alt="" id="room-button-red">
        <img src="/img/homepage/room-button-green.png"" alt="" id="room-button-green">
        <img src="/img/homepage/room-line.png" alt="" id="room-line">
        <img src="/img/homepage/room-scenograph.jpg" alt="" id="room-scenograph">
        <img src="/img/homepage/room.jpg" alt="" id="room">
        <div class="rolling-container">
            <canvas id="room-icon-circular" width="220" height="220" class="opacity-80">
            您的浏览器不支持。
            </canvas>
            <img src="/img/homepage/icons8-visible.png" alt="" id="room-icon-eye">
            <p class="room-text">see inside</p>   
        </div>
        <img src="/img/homepage/room-button-red.png" alt="" id="room-button-red-alone" class="opacity-0">
        <img src="/img/homepage/room-button-green.png" alt="" id="room-button-green-alone" class="opacity-0">
    </div>
</div>

{{-- client area HTML --}}
<div class="client-wrapper">
    <h1>Our Clients</h1>
    <div class="client-showcase">
        <table class="table borderless">
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

