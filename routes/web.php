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

// Router for Homepage
Route::get('/', 'PagesController@index');

// Router for Products
Route::get('/products/walkie-talkie', 'PagesController@walkieTalkie');
Route::get('/products/wirelss-charger', 'PagesController@wirelessCharger');
Route::get('/products/smart-room-controller', 'PagesController@smartRoomController');

// Router for Solutions
Route::get('/solutions/system-integration', 'PagesController@sysIntegration');
Route::get('/solutions/dms', 'PagesController@dms');
Route::get('/solutions/iot', 'PagesController@iot');

// Route for Contact Us
Route::get('/contact-us', 'PagesController@contact');

// Route for seed message in Contact Us page
Route::any('/contact/save','SeedMessage@store');