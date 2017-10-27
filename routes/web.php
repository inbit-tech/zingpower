<?php

/*
|--------------------------------------------------------------------------
| ZingPower.co Routes
|--------------------------------------------------------------------------
|
| zingpower.co sitemap for references
| + Homepage
| + Products
|	- mobile phone
|	- walkie talkie
| 	- smart room controller
| + Solutions
|	- system integration
|	- device management system [dms]
| 	- Zigbee, Z-Wave or LoRaWAN Local Network Setup [lms]
| + User Story
| + About Us
|	- Zing Power
|	- News
| + Contact Us
*/

// Import model namespace - News
use App\News;

// Router for Homepage
Route::get('/', 'PagesController@index');

// Router for Products
Route::get('/products/mobile-phone', 'PagesController@mobilePhone');
Route::get('/products/walkie-talkie', 'PagesController@walkieTalkie');
Route::get('/products/wirelss-charger', 'PagesController@wirelessCharger');
Route::get('/products/smart-room-controller', 'PagesController@smartRoomController');

// Router for Solutions
Route::get('/solutions/system-integration', 'PagesController@sysIntegration');
Route::get('/solutions/dms', 'PagesController@dms');
Route::get('/solutions/lms', 'PagesController@lms');

// Router for News
Route::get('/news', function() {
	$zp_news = News::all();
	return view('news.index', compact('zp_news'));
});

Route::get('/news/{news_id}', function($id) {
	$zp_news = News::find($id);
	return view('news.show', compact('zp_news'));
});

// Route for Contact Us
Route::get('/contact', 'PagesController@contact');

// Route for seed message in Contact Us page
Route::any('/contact/save','SeedMessage@store');