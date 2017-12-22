@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Wireless Charger - Products - Zing Power</title>
@endsection

<!-- Custom CSS for wireless charger Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/wireless.css') }}" rel="stylesheet">
@endsection

@section ('content')
{{-- Cover Section --}}
<section id="cover-wrapper">
    <div class="cover-image">
    </div>
</section>

{{-- Content Section --}}
<section id="content-wrapper">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="5w-tab" data-toggle="tab" href="#5w" role="tab" aria-controls="5w" aria-selected="true">5W Standard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="10w-tab" data-toggle="tab" href="#10w" role="tab" aria-controls="10w" aria-selected="false">10W Standard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="15w-tab" data-toggle="tab" href="#15w" role="tab" aria-controls="15w" aria-selected="false">15W Standard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="15wc-tab" data-toggle="tab" href="#15wc" role="tab" aria-controls="15wc" aria-selected="false">15W Car Charger</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="15wmc-tab" data-toggle="tab" href="#15wmc" role="tab" aria-controls="15wmc" aria-selected="false">15W Magnetic Car Charger</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="5w" role="tabpanel" aria-labelledby="home-tab">5W Content</div>
        <div class="tab-pane fade" id="10w" role="tabpanel" aria-labelledby="profile-tab">10W Content</div>
        <div class="tab-pane fade" id="15w" role="tabpanel" aria-labelledby="contact-tab">15W Content</div>
        <div class="tab-pane fade" id="15wc" role="tabpanel" aria-labelledby="contact-tab">15WC Content</div>
        <div class="tab-pane fade" id="15wmc" role="tabpanel" aria-labelledby="contact-tab">15WMC Content</div>
    </div>
</section>
@endsection