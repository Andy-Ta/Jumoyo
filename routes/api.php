<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'ClientController@register');

Route::get('/business/bookings', 'BusinessController@getBookings');

Route::get('/portfolio', 'ClientController@getPortfolio');

/* MOBILE */
Route::post('/login', 'MobileController@login');

Route::post('/mobileregister', 'MobileController@register');

Route::prefix('mobile')->group(function() {

    Route::post('/getbookings', 'MobileController@getBookings');

    Route::post('/getfavorites', 'MobileController@getFavorites');

    Route::post('/getclientinfo', 'MobileController@getClientInfo');

    Route::post('/updateclientinfo', 'MobileController@updateClientInfo');

    Route::post('/updateclientpsw', 'MobileController@updatePassword');

    Route::post('/updateclientimage', 'MobileController@changeImage');

    Route::post('/deleteclientimage', 'MobileController@deleteImage');
});