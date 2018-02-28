<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* No touching */

Route::get('/', function () {
    return view('pages.construction');
});

/*
Route::get('/syndeeo2017', function () {
    return File::get(public_path() . '/public/syndeeo2017/index.html');
});
*/

Route::get('/', function () {
    return view('pages.home');
});

/* End of No touching */


/* Views logic */

Route::get('/search', array(
    'uses' => 'ClientController@getServices'
));

Route::get('/business', function () {
    return view('pages.business.schedule', ['page' => 'Schedule']);
})->middleware('checklogged', 'checkbusiness');

Route::get('/business/services', function () {
    return view('pages.business.services', ['page' => 'Services']);
})->middleware('checklogged', 'checkbusiness');

Route::get('/business/post', array(
    'uses' => 'BusinessController@getPost'
))->middleware('checklogged', 'checkbusiness');

Route::get('/business/review_rating', array(
    'uses' => 'BusinessController@getAllReviews'
))->middleware('checklogged', 'checkbusiness');

Route::get('/business/serviceedit', array (
    'uses' => 'BusinessController@editMyService'
))->middleware('checklogged', 'checkbusiness');

Route::get('/business/businessinfo', array (
    'uses' => 'BusinessController@getBusinessInfo'
))->middleware('checklogged', 'checkbusiness');

Route::get('/business/register', function () {
    return view('pages.business.register', ['page'=>'Register']);
})->middleware('checklogged');

Route::get('/business/contact', array(
    'uses' => 'BusinessController@displayContacts'
))->middleware('checklogged', 'checkbusiness');

Route::get('/logout', function() {
    session()->flush();
    return view('pages.home');
});

Route::get('/account', ['uses' => 'ClientController@account']
)->middleware('checklogged');

Route::get('/business/portfolio', array(
    'uses' => 'BusinessController@getPortfolio'
))->middleware('checklogged', 'checkbusiness');

Route::get('/service/{id}', ['uses' =>'ClientController@product']);

Route::post('/post/{postid}', 'ClientController@postAction')->middleware('checklogged');

//Services stuff starts here

Route::get('/business/myservices', array(
    'uses' => 'BusinessController@getMyServices'
))->middleware('checklogged', 'checkbusiness');

Route::get('/business/myservices/edit/{id}', array(
    'uses' => 'BusinessController@getMyService'
))->middleware('checklogged', 'checkbusiness');

Route::get('/post/{postid}', 'ClientController@getPostContent');

Route::post('/business/review_rating', 'BusinessController@getReviews');

/* Actions logic */
Route::patch('/business/booking/{bookingid}', 'BusinessController@confirmBooking')->middleware('checklogged', 'checkbusiness');

Route::delete('/business/booking/{bookingid}', 'BusinessController@deleteBooking')->middleware('checklogged', 'checkbusiness');

Route::get('/business/bookings/feed', 'BusinessController@getBookingsFeed')->middleware('checklogged', 'checkbusiness');

Route::get('/service', 'ClientController@getService');

Route::get('/business/post/delete/{id}', 'BusinessController@deletePost');

Route::get('/delete/{id}', 'ClientController@deleteReview');

Route::post('/business/post/update', 'BusinessController@editPost');

Route::post('/register', 'ClientController@register');

Route::post('/business/businessinfo/update', 'BusinessController@updateBusiness');

Route::post('/business/register', 'BusinessController@register');

Route::post('/business/services', 'BusinessController@services');

Route::post('/login', 'ClientController@authenticate');

Route::post('/addContact', 'BusinessController@addContact');

Route::post('/editContact', 'BusinessController@editContact');

Route::get('/removeContact/{contactID}', 'BusinessController@removeContact');

Route::post('/business/post', 'BusinessController@post');

Route::post('/business/portfolio/add', 'BusinessController@addPortfolio');

Route::post('/business/portfolio/delete', 'BusinessController@deletePortfolio');

Route::post('/editAccInfo', 'ClientController@editAccInfo');

Route::post('/changePassword', 'ClientController@changePassword');

Route::post('/changeAccImg', 'ClientController@changeAccImg');

Route::get('/deleteAccImage', 'ClientController@deleteAccImage');

Route::post('/business/portfolio/delete', 'BusinessController@deletePortfolio');

Route::post('/book', 'ClientController@book');

Route::post('/review', 'ClientController@review');

Route::post('/{id}', 'ClientController@review');

//Service related

Route::post('/business/services', 'BusinessController@services');

Route::get('/business/myservices/delete/{id}', 'BusinessController@removeMyService');

Route::post('/business/myservices/edit/do', 'BusinessController@editMyService');

//Favorite related

Route::get('/service/favorite/{service_id}', 'ClientController@favService');

Route::get('/service/unfavorite/{service_id}', 'ClientController@unfavService');

Route::get('/service/unfavfromacc/{service_id}', 'ClientController@unfavFromAccService');