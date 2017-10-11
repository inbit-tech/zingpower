<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Homepage
    public function index()
    {
    	return view('home');
    }

    // Products - Mobile Phone
    public function mobilePhone()
    {
    	return view('');
    }

    // Products - Walkie Talkie
    public function walkieTalkie()
    {
    	return view('');
    }

    // Products - Smart Room Controller
    public function smartRoomController()
    {
    	return view('');
    }

    // Solutions - System Integration
    public function sysIntegration()
    {
    	return view('');
    }

    // Solutions - Device Management System
    public function dms()
    {
    	return view('');
    }

    // Solutions - Zigbee, Z-Wave or LoRaWAN Local Network Setup
    public function lms()
    {
    	return view('');
    }

    // User Story
    public function userStory()
    {
    	return view('');
    }

    // About Us - Zing Power
    public function zingpower()
    {
    	return view('');
    }

    // About Us - News
    public function news()
    {
    	return view('');
    }

    // Contact Us
    public function contact()
    {
    	return view('');
    }
}
