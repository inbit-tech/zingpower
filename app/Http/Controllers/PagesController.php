<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Homepage
    public function index()
    {
    	return view('home.index');
    }

    // Products - Mobile Phone
    public function mobilePhone()
    {
    	return view('products.mobile');
    }

    // Products - Walkie Talkie
    public function walkieTalkie()
    {
    	return view('products.wata');
    }

    // Products - Wirelss Charger
    public function wirelessCharger()
    {
        return view('products.wireless');
    }

    // Products - Smart Room Controller
    public function smartRoomController()
    {
    	return view('products.src');
    }

    // Solutions - System Integration
    public function sysIntegration()
    {
    	return view('solutions.sysint');
    }

    // Solutions - Device Management System
    public function dms()
    {
    	return view('solutions.dms');
    }

    // Solutions - Zigbee, Z-Wave or LoRaWAN Local Network Setup
    public function iot()
    {
    	return view('solutions.iot');
    }

    // About Us
    public function about()
    {
        return view('about.index');
    }

    // Contact Us
    public function contact()
    {
    	return view('contact.index');
    }
}
