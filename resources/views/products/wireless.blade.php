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
{{-- hero picture --}}
<div class="m-b-30">
    <div class="card text-white">
        <img src="http://placeimg.com/640/300/tech" alt="" class="img-fluid card-img">
        <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
            <h1>Wireless Charger</h1>
        </div>
    </div>
</div>

{{-- message list --}}
<div class="m-b-30 d-flex flex-column justify-content-between align-items-center">
    <div class="w-75 p-3 d-flex flex-wrap justify-content-around">
        <div>
            <img src="http://placeimg.com/300/300/tech" alt=""  class="">
        </div>
        <div class="mt-2 width-50">
            <div class="d-flex justify-content-between">
                <a class="mx-2" data-toggle="collapse" href="#name-1" aria-expanded="ture" aria-controls="name-1">
                Name
                </a>
                <a class="mx-2" data-toggle="collapse" href="#Specification-1" aria-expanded="ture" aria-controls="Specification-1">
                Specification
                </a>            
            </div>
            <hr>
            <div class="collapse show" id="name-1">
                <div class="card card-body">
                <p>Smart room controller is a new complex product based on ZigBee/SmartRoom technology. It is mainly used to control the electric appliances. Except for manual operation, users can also control the curtain, air conditioner, TV and light normal operation by our Smart room controller.</p>
                </div>
            </div>
            <div class="collapse" id="Specification-1">
                <div class="card card-body">
                Specification
                </div>
            </div>
        </div>        
    </div>

    <div class="w-75 p-3 d-flex flex-wrap justify-content-around">
        <div>
            <img src="http://placeimg.com/300/300/animal" alt=""  class="">
        </div>
        <div class="mt-2 width-50">
            <div class="d-flex justify-content-between">
                <a class="mx-2" data-toggle="collapse" href="#name-2" aria-expanded="ture" aria-controls="name-2">
                Name
                </a>
                <a class="mx-2" data-toggle="collapse" href="#Specification-2" aria-expanded="ture" aria-controls="Specification-2">
                Specification
                </a>            
            </div>
            <hr>
            <div class="collapse show" id="name-2">
                <div class="card card-body">
                <p>Smart room controller is a new complex product based on ZigBee/SmartRoom technology. It is mainly used to control the electric appliances. Except for manual operation, users can also control the curtain, air conditioner, TV and light normal operation by our Smart room controller.</p>
                </div>
            </div>
            <div class="collapse" id="Specification-2">
                <div class="card card-body">
                Specification
                </div>
            </div>
        </div>        
    </div>

    <div class="w-75 p-3 d-flex flex-wrap justify-content-around">
        <div>
            <img src="http://placeimg.com/300/300/people" alt=""  class="">
        </div>
        <div class="mt-2 width-50">
            <div class="d-flex justify-content-between">
                <a class="mx-2" data-toggle="collapse" href="#name-3" aria-expanded="ture" aria-controls="name-3">
                Name
                </a>
                <a class="mx-2" data-toggle="collapse" href="#Specification-3" aria-expanded="ture" aria-controls="Specification-3">
                Specification
                </a>            
            </div>
            <hr>
            <div class="collapse show" id="name-3">
                <div class="card card-body">
                <p>Smart room controller is a new complex product based on ZigBee/SmartRoom technology. It is mainly used to control the electric appliances. Except for manual operation, users can also control the curtain, air conditioner, TV and light normal operation by our Smart room controller.</p>
                </div>
            </div>
            <div class="collapse" id="Specification-3">
                <div class="card card-body">
                Specification
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection