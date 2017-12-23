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
            <p class="cover-text">Smart Room Controller</p>
        </div>
    </section>
</section>

{{-- Content Section --}}
<section id="content-wrapper">
    {{-- Intro text section --}}
    <div class="intro-wrapper mx-auto">
        
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
        
    </div>
</section>
@endsection

@section ('custom-js')
<script src="{{ asset('/js/pages/sru.js') }}" type="text/javascript" charset="utf-8" async defer></script>
@endsection