@extends ('master')

{{-- page title --}}
@section ('page-title')
<title>Contact Us - Zing Power</title>
@endsection


@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/contact.css') }}">
@endsection

{{-- top picture HTML--}}
@section ('content')
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/1000/300/any" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex justify-content-center align-items-end">
            <p class="card-text font-weight-bold text-uppercase">contact us</p> 
        </div>
    </div>
</div>

{{-- address HTML --}}
<div class="m-b-30 d-flex justify-content-center">
    <div class="w-75 d-flex flex-wrap justify-content-around align-items-start flex-column-sm align-items-center-sm">
        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">phone</p>
            <p>+86 18688888888</p>
        </div>

        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">address</p>
            <p class="text-center">no.5 Unit 3-1 xxx Building Chanba,Shaanxi,China</p>
        </div>

        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">email</p>
            <p>hi@zingpower.co</p>
        </div>
    </div>
</div>

{{-- message HTML --}}
<div class="m-b-30 d-flex flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase m-b-30">send us message if you have any questions</h3>
    <form action="index_submit" method="get" accept-charset="utf-8" class="w-50">
        <input type="text" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Full Name">
        <input type="number" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Phone Number">
        <input type="email" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Email">
        <textarea class="form-control m-b-30 input-bg-color" id="exampleFormControlTextarea1" rows="3" placeholder="Question"></textarea>
    </form>
    <button type="submit" class="btn btn-primary">Send Message</button>
</div>

{{-- connect with us --}}
<div class="m-b-30 d-flex flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase">connect with us</h3>
    <div>
        <img src="http://placeimg.com/50/50/people" alt="">
        <img src="http://placeimg.com/50/50/tech" alt="">
    </div>
</div>

{{-- Google map API --}}
{{-- Use Baidu maps temporarily and replace Google later --}}
<div class="m-b-30 d-flex justify-content-center ">
    <img src="http://api.map.baidu.com/staticimage?width=1000&height=300&center=109.01154,34.339349&zoom=15&markers=109.019786,34.337471&markerStyles=l,0" alt="" class="">
</div>
@endsection