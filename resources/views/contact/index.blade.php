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
<div id="contact-cover-wrapper">
    <div class="cover-image">
        <p class="cover-text">Contact Us</p>
    </div>
</div>

{{-- address HTML --}}
<div class="card-group mx-auto">
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">+86 18066860099</p>
            <p class="card-text">+86 29 87580960</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">3rd Floor, No.333 Xingtai South Road, Euro-Asia Creative Design Park Incubation Center, Xi'an Chan-Ba Ecological District.</p>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <p class="card-text">
                <a href="mailto:info@zingpower.co">
                    info@zingpower.co 
                </a>
            </p>
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

@section('custom-js')
<script type="text/javascript" src="{{ asset('/js/pages/contact.js') }}"></script>
@endsection