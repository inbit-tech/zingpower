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

// Router for dev only
Route::get('/', 'PagesController@dev');

// Router for Homepage
Route::get('/index', 'PagesController@index');

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
Route::get('/news', 'PagesController@news');
Route::get('/news/{news_id}', function($id) {
	$zp_news = DB::table('news')->find($id);
	return view('news.show', compact('zp_news'));
});

// Route for About Us
Route::get('/about', 'PagesController@zingpower');

// Route for Contact Us
Route::get('/contact', 'PagesController@contact');
