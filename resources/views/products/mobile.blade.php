@extends ('master')

<!-- Page Title -->
@section ('page-title')
<title>Mobile Phone - Products - Zing Power</title>
@endsection

<!-- Custom CSS for Mobile Phone Product Page -->
@section ('custom-css')
<link href="{{ asset('/css/pages/mobile.css') }}" rel="stylesheet">
@endsection

@section ('content')
{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="/img/products/mobilephone.png" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1 class="Mobile-Phone">Mobile Phone</h1>
        </div>
    </div>
</div>

{{-- Product introduction --}}
<div class="m-b-30 d-flex justify-content-center text-center p-5">
    <p class="We-deliver-a-complet">We deliver a complete and comprehensive working solution to help our customers to achieve seamless operations and excellence in their services, cost reduction and simultaneously drive their revenue growth.</p>
</div>

{{-- products other page --}}
<div class="m-b-30 border border-dark d-flex justify-content-center align-items-center">
    <h3 class="w-100 p-5 productsText">Mobile Phone</h3>
</div>

<div class="m-b-30 border border-dark d-flex justify-content-center align-items-center">
    <h3 class="w-100 p-5 productsText">Wireless Transmitter Unit</h3>
</div>

<div class="m-b-30 border border-dark d-flex justify-content-center align-items-center">
    <h3 class="w-100 p-5 productsText">Wireless Receiver Unit</h3>
</div>

{{-- text --}}
<div class="m-b-30 d-flex justify-content-center flex-column align-items-center">
    <h3 class="Productivity-with-Qu p-3">Productivity with Quality</h3>
    <p class="w-75 px-5 mx-5">The products are compatible, certified and tested solutions in the market. This ensures that there is no compatibility and support issues, which will guarantee the productivity and quality of your telecommunication operations and services, rendered to your customers.
</p>
</div>
@endsection