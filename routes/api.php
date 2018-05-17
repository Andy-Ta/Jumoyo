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