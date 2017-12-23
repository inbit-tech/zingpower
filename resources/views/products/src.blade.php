@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Room Control Unit - Products - Zing Power</title>
@endsection

<!-- Custom CSS for Smart Room Controller Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/src.css') }}" rel="stylesheet">
@endsection

@section ('content')
{{-- Cover Section --}}
<section id="cover-wrapper">
    <section id="cover-wrapper">
        <div class="cover-image">
            <p class="cover-text">Make Your Space Alive</p>
        </div>
    </section>
</section>

{{-- Content Section --}}
<section id="content-wrapper">
    {{-- Intro text section --}}
    <div class="intro-wrapper mx-auto">
        <p class="src-content">
            Smart Room Controller is a new complex product based on ZigBee / SmartRoom technology. It is mainly used to control the electronic appliances. Except for manual operation, users can also control the curtain, air conditioner, TV and light by our Smart room controller. It can be widely used in smart hotel, hospital, building, breeding, home, etc.
        </p>
    </div>

    {{-- DMS section --}}
    <div class="dms-wrapper row mx-auto">
        <img class="dms-device" src="/img/sru/dms_default.png" id="dms-bg" alt="" />
        <div class="dms-device-intro">
            <h2 class="dms-header-text">Smart Room Controller</h2>
            <table class="table borderless">
                <tbody>
                    <tr class="hotel-service-list">
                        <td>
                            <a href="" class="dms-menu-link">
                            <img src="/img/sru/icon_main_menu.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-room-service-link">
                            <img src="/img/sru/icon_room_service.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-service-link">
                            <img src="/img/sru/icon_service.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-hotel-link">
                            <img src="/img/sru/icon_hotel.png" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="dms-aircon-link">
                            <img src="/img/sru/icon_aircon.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-light-link">
                            <img src="/img/sru/icon_light.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-curtain-link">
                            <img src="/img/sru/icon_curtain.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-room-control-link">
                            <img src="/img/sru/icon_room_control.png" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="" class="dms-tv-control-link">
                            <img src="/img/sru/icon_tv_control.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-room-clean-link">
                            <img src="/img/sru/icon_room_clean.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-food-link">
                            <img src="/img/sru/icon_food.png" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="" class="dms-concierge-link">
                            <img src="/img/sru/icon_concierge.png" alt="">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Function List --}}
    <div class="func-wrapper mx-auto">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Based on ZigBee/SmartRoom Technology</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Mobile Terminals Anytime and Anywhere</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Zero Wiring with Convenient Installation</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Manipulation is Simple and Flexible</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section ('custom-js')
<script src="{{ asset('/js/pages/sru.js') }}" type="text/javascript" charset="utf-8" async defer></script>
@endsection