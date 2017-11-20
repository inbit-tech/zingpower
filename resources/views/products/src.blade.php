@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Smart Room Controller - Products - Zing Power</title>
@endsection

<!-- Custom CSS for Smart Room Controller Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/src.css') }}" rel="stylesheet">
@endsection

@section ('content')
{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="/img/products/smartcontroller.jpeg" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="Smart-Room-Controlle">Smart Room Controller</h1>
        </div>
    </div>
</div>

{{-- text --}}
<div class="m-b-30 p-5 d-flex flex-wrap justify-content-center">
    <div class="width-25">
        <img src="http://placeimg.com/200/200/phone" alt="" class="rounded-circle">
    </div>
    <div class="width-25 my-3">
        <h3>ZigBee/SmartRoom Technology</h3>
        <p>It is mainly used to control the electric appliances. Except for manual operation, users can also control the curtain, air conditioner, TV and light normal operation by our Smart room controller.</p>
    </div>
</div>

<div class="dms-wrapper row mx-auto">
    <img class="dms-device" src="/img/home/dms_default.png" id="dms-bg" alt="" />
    <div class="dms-device-intro">
        <h2 class="dms-header-text">Device Management System</h2>
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

{{-- phone img --}}
{{-- <div class="m-b-30 text-center">
    <img src="http://placeimg.com/375/667/any" alt="">
</div> --}}

{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="/img/products/controller.jpeg" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="No-Wire-Solution-Zer">No Wire Solution</h1>
            <h1 class="No-Wire-Solution-Zer">Zero Down Time</h1>
        </div>
    </div>
</div>

{{-- img item --}}
<div class="m-b-30 d-flex justify-content-center">
    <div class="d-flex flex-wrap justify-content-around align-items-start">
        <div class="p-4 d-flex justify-content-between flex-column align-items-center">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p>building</p>
        </div>

        <div class="p-4 d-flex justify-content-between flex-column align-items-center">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p>hotel</p>
        </div>

        <div class="p-4 d-flex justify-content-between flex-column align-items-center">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p>school</p>
        </div>

        <div class="p-4 d-flex justify-content-between flex-column align-items-center">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p>hospital</p>
        </div>

        <div class="p-4 d-flex justify-content-between flex-column align-items-center">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p>breeding</p>
        </div>
    </div>
</div>
@endsection