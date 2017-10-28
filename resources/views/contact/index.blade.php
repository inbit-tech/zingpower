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
            <h4 class="card-text font-weight-bold text-uppercase">contact us</h4> 
        </div>
    </div>
</div>

{{-- address HTML --}}
<div class="m-b-30 d-flex justify-content-center">
    <div class="w-75 d-flex flex-wrap justify-content-around align-items-start flex-column-sm align-items-center-sm">
        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">TEL</p>
            <p>+86 18066860099</p>
            <p>+86 29 87580960</p>
        </div>

        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">address</p>
            <p class="text-center"> 3rd Floor, No.333 Xingtai South Road, Euro-Asia Creative Design Park Incubation Center, Xi'an Chan-Ba Ecological District.</p>
        </div>

        <div class="w-25 d-flex justify-content-between flex-column align-items-center width-25">
            <img src="http://placeimg.com/50/50/any" alt="">
            <p class="font-weight-bold text-uppercase">email</p>
            <p>info@ zingpower.co</p>
        </div>
    </div>
</div>

{{-- enterprise display --}}
<div class="m-b-30 d-flex flex-wrap">
    <div class="width-50 my-3 d-flex flex-column align-items-center" id="whoWeAre">
        <h1 id="whoWeAre-title">Who We Are</h1>
        <div id="whoWeAre-text">
            <p class="px-3" >We are a R&D house based in Xi’an China, with a team of electrical engineers and specialists, designing, developing and customizing in electrical and semiconductor related products, to meet customers’ expectations and unique requirement. Another team of software developer specialized in mobile technology and business analytics.</p>
            <p class="px-3">We have provided extensive mobile phone and wireless charging solutions to over 120 customer bases in various industries mainly F&B, Logistics, Automobile, hospitality, educations and etc.</p>
        </div>
    </div>
    <div class="width-50 my-3 d-flex flex-column align-items-center" id="whatWeDo">
        <h1 id="whoWeAre-title">What We Do</h1>
        <div id="whoWeAre-text">
            <p class="px-3" >We deliver a complete and comprehensive working solution to help hotels to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
            <p class="px-3">Our exclusive solution includes combinations of smart devices, apps, backend system, database and etc., it is customizable to match each customers' unique requirements</p>
        </div>
    </div>
</div>

{{-- message HTML --}}
<div class="m-b-30 d-flex flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase m-b-30">send us message if you have any questions</h3>
    <form action="{{ url('contact/save') }}" method="post" accept-charset="utf-8" class="w-50 d-flex flex-column justify-content-between align-items-center">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Full Name" required>
        <input type="number" name="phone" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Phone Number" required>
        <input type="email" name="email" class="form-control form-control-lg m-b-30 input-bg-color" id="exampleFormControlInput1" placeholder="Email" required>
        <textarea name="question" class="form-control m-b-30 input-bg-color" id="exampleFormControlTextarea1" rows="3" placeholder="Question" required></textarea>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
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