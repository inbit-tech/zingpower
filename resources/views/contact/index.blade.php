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
    <div class="card borderless">
        <img class="card-img-top mx-auto" src="/img/contact/icon_phone.png" alt="Phone">
        <div class="card-body">
            <p class="card-text">+86-18066860099</p>
            <p class="card-text">+86-29-87580960</p>
        </div>
    </div>
    <div class="card borderless">
        <img class="card-img-top mx-auto" src="/img/contact/icon_addr.png" alt="Address">
        <div class="card-body">
            <p class="card-text">3rd Floor, No.333 Xingtai South Road, Euro-Asia Creative Design Park Incubation Center, Xi'an Chan-Ba Ecological District.</p>
        </div>
    </div>
    <div class="card borderless">
        <img class="card-img-top mx-auto" src="/img/contact/icon_email.png" alt="eMail">
        <div class="card-body">
            <p class="card-text align-email">
                <a href="mailto:info@zingpower.co">
                    info@zingpower.co 
                </a>
            </p>
        </div>
    </div>
</div>

{{-- message HTML --}}
<div class="d-flex flex-column justify-content-between align-items-center">
    <h3 class="contact-text text-uppercase">send us message if you have any questions</h3>

    <form action="{{ url('contact/save') }}" method="post" accept-charset="utf-8" class="contact-form d-flex flex-column justify-content-between align-items-center">
        <div class="form-group">
            <label for="exampleFormControlInput1">Your Name</label>
            <input type="text" class="form-control" placeholder="How could we address you?">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Working Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cell Phone</label>
            <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="+CountryCode ...">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Your Question</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Please enter your info"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-info btn-lg">Send Message</button>
    </form>

    {{-- <form action="{{ url('contact/save') }}" method="post" accept-charset="utf-8" class="contact-form w-50 d-flex flex-column justify-content-between align-items-center">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" class="form-control form-control-lg input-bg-color" id="exampleFormControlInput1" placeholder="Full Name" required>
        <input type="number" name="phone" class="form-control form-control-lg input-bg-color" id="exampleFormControlInput1" placeholder="Phone Number" required>
        <input type="email" name="email" class="form-control form-control-lg input-bg-color" id="exampleFormControlInput1" placeholder="Email" required>
        <textarea name="question" class="form-control input-bg-color" id="exampleFormControlTextarea1" rows="3" placeholder="Question" required></textarea>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form> --}}
</div>

{{-- connect with us --}}
<div class="social-wrapper d-flex flex-column justify-content-between align-items-center">
    <h3 class="text-uppercase">connect with us</h3>
    <div class="social-list">
        <a href="//www.facebook.com/Zing-Power-218782381993140">
            <img src="/img/contact/social_facebook.png" alt="">
        </a>
        <a href="//twitter.com/ZingPowerCo">
            <img src="/img/contact/social_twitter.png" alt="">
        </a>
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