@extends ('master')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/homepage.css') }}">
@endsection

@section ('content')
{{-- top area HTML --}}
<div class="content">
    <div class="title m-b-md flex-center">
        <img src="/image/Chicago-Trump.jpg" alt="" class="img-responsive top-picture">
        <div class="subject-text">
            <p><strong>Make Your Space Alive</strong></p> 
            <button type="" class="btn btn-primary btn-lg">Learn More</button> 
        </div>
    </div>
</div>

{{-- products area HTML --}}
<div class="content">
    <ul class="ul-position">
        <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"><p>Mobile Phone</p></li>
        <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"><p>Walkie Talkie</p></li>
        <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"><p>Wireless Charger</p></li>
        <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"><p>Smart Controller</p></li>
    </ul>
</div>

{{-- SystemIntegration area HTML --}}
<div class="content">
    <div class="systemIntegration-header">
        <div class="systemIntegration-header-info">
            <h1><strong>System Integration</strong></h1>
            <p>General introduction info about system integration functionality</p>
            <button type="" class="btn btn-success btn-sm">Learn More</button>   
        </div>
    </div>
    <div class="systemIntegration-content">
        <div class="systemIntegration-content-img">
            <img src="http://via.digital.com/350x500" alt="">
        </div>
        <div class="systemIntegration-content-info">
            <h1><strong>One Device to Rule Them All</strong></h1>
            <p>General  information about Device Management System Zero downtime implementation.</p>
            <button type="" class="btn btn-danger">Learn More</button>
        </div>
    </div>
</div>

{{-- fullPicture area HTML --}}
<div class="content">
    <div class="title m-b-md flex-center">
        <img src="/image/Chicago-Trump.jpg" alt="" class="img-responsive width-100">
        <div class="subject-text">
            <p><strong>ZERO DOWN</strong></p>
            <p><strong>ZERO WIRE</strong></p>
        </div>
    </div>
</div>

{{-- client area HTML --}}
<div class="content">
    <div class="client-title">
        <h1>Our Clients Are Saving</h1>
        <h2>$ 123,456,789</h2>
    </div>
    <div class="client-content">
        <ul class="client-content-ul">
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
            <li><img src="/image/test-img.jpeg" alt=""  class="img-circle img-size"></li>
        </ul> 
    </div>
</div>

@endsection


