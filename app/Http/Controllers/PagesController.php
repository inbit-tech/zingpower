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
    	return view('products.mobile');
    }

    // Products - Walkie Talkie
    public function walkieTalkie()
    {
    	return view('products.wata');
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
    public function lms()
    {
    	return view('solutions.lms');
    }

    // User Story
    public function userStory()
    {
    	return view('userstory.index');
    }

    // About Us - Zing Power
    public function zingpower()
    {
    	return view('about.zingpower');
    }

    // About Us - News
    public function news()
    {
    	return view('news.index');
    }

    // Contact Us
    public function contact()
    {
    	return view('contact.index');
    }
}
