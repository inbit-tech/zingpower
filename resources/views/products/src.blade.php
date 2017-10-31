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
        <img src="http://placeimg.com/640/300/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1>Smart Room Controller</h1>
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

{{-- phone img --}}
<div class="m-b-30 text-center">
    <img src="http://placeimg.com/375/667/any" alt="">
</div>

{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/640/300/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1>No Wire Solution</h1>
            <h1>Zero Down Time</h1>
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