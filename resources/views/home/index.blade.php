@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/home.css') }}">
@endsection

@section ('content')
{{-- Add Room Controller Interactive Module --}}
<section id="cover-wrapper">
    <h1>Make Your Space Alive</h1>
    <img src="" alt="">
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

{{-- fullPicture area HTML --}}
<div class="video-wrapper">
    <video playsinline autoplay muted loop poster="/img/home/home-video-cover.jpg" id="zero-bg-video">
        <source src="//otyhzy70j.bkt.clouddn.com/hotel-deco.mp4" type="video/mp4">
    </video>
    <div class="text-overlay mx-auto">
        <p>Zero Downtime Deployment</p>
        <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='/solutions/dms'">Learn More</button>
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
@endsection

