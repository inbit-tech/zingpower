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
        <a class="nav-link" id="15wc-tab" data-toggle="tab" href="#510wc" role="tab" aria-controls="15wc" aria-selected="false">5W/10W Car Charger</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="15wmc-tab" data-toggle="tab" href="#5wmc" role="tab" aria-controls="15wmc" aria-selected="false">5W Magnetic Car Charger</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        {{-- 5W --}}
        <div class="tab-pane fade show active" id="5w" role="tabpanel" aria-labelledby="profile-tab">
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Wireless Charging, Fast Charge</li>
                                <li>Input: DC 5V/2A</li>
                                <li>Output: DC 5V/1A</li>
                                <li>Charging Frequency: 110 to 205KHz</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Conversion Efficiency: 80% (Max)</li>
                                <li>Working Temperature: -10°C to 50°C</li>
                                <li>Storage Temperature: -20°C to 85°C</li>
                                <li>Size: 78*8.5mm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc01.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc02.png" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- 10W --}}
        <div class="tab-pane fade" id="10w" role="tabpanel" aria-labelledby="profile-tab">
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Wireless Charging, Fast Charge</li>
                                <li>Input: DC 5V/2A，9V/1.7A</li>
                                <li>Output: DC 5V/1A, 9V/1.1A</li>
                                <li>Charging Frequency: 110 to 205KHz</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Conversion Efficiency: 80% (Max)</li>
                                <li>Working Temperature: -10°C to 50°C</li>
                                <li>Storage Temperature: -20°C to 85°C</li>
                                <li>Size: 89*7.1mm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc03.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc04.png" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- 15W --}}
        <div class="tab-pane fade" id="15w" role="tabpanel" aria-labelledby="contact-tab">
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Wireless Charging, Fast Charge</li>
                                <li>Input: DC 5V/2A，9V/1.7A, 12V/2A</li>
                                <li>Output: DC 5V/1A，9V1.1A, 12V/1.25A</li>
                                <li>Charging Frequency: 110 to 205KHz</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Conversion Efficiency: 80% (Max)</li>
                                <li>Working Temperature: -10°C to 50°C</li>
                                <li>Storage Temperature: -20°C to 85°C</li>
                                <li>Size: 104*20mm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc05.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc06.png" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- 5W/10W Car Charger --}}
        <div class="tab-pane fade" id="510wc" role="tabpanel" aria-labelledby="contact-tab">
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Wireless Charging, Fast Charge</li>
                                <li>Input: DC 5V/2A，9V1.7A</li>
                                <li>Output: DC 5V/1A, 9V/1.1A</li>
                                <li>Charging Frequency: 110 to 205KHz</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Conversion Efficiency: 80% (Max)</li>
                                <li>Working Temperature: -10°C to 50°C</li>
                                <li>Storage Temperature: -20°C to 85°C</li>
                                <li>Size: 105*105*(30+44) mm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc07.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc08.png" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- 5W Car Charger Magnetic --}}
        <div class="tab-pane fade" id="5wmc" role="tabpanel" aria-labelledby="contact-tab">
            <form>
                <div class="form-row">
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Wireless Charging, Fast Charge</li>
                                <li>Input: DC 5V/2A</li>
                                <li>Output: DC 5V/1A</li>
                                <li>Charging Frequency: 110 to 205KHz</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="device-info">
                            <ul>
                                <li>Conversion Efficiency: 80% (Max)</li>
                                <li>Working Temperature: -10°C to 50°C</li>
                                <li>Storage Temperature: -20°C to 85°C</li>
                                <li>Size: 70*70mm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc09.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="device-img">
                            <img src="/img/wireless/wc10.png" alt="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection