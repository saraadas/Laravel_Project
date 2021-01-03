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


use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('dashboard_veiw.adminlogin');
//});


Route::get('/paradise/contact', function () {
    return view('public_veiw.public_contact');
});


// Route::get('manage_admin', function () {
//     return view('dashboard_veiw.manage_admin');
// })->name('manage_admin');


//<!-- create Admin -->
Route::group(['middleware' => 'checkadmin'], function () {
    Route::post('/dashboard/admin','AdminController@store');
    Route::get('/dashboard/admin','AdminController@create');
    Route::get('/dashboard/admin/{admin}','AdminController@destroy');
    Route::get('/dashboard/admin/{admin}/edit','AdminController@edit');
    Route::Put('/dashboard/admin/{admin}','AdminController@update');

//Route::post('/dashboard/admin','AdminController@store');
//Route::get('/dashboard/admin','AdminController@create');
//Route::get('/dashboard/admin/{admin}','AdminController@destroy');
//Route::get('/dashboard/admin/{admin}/edit','AdminController@edit');
//Route::Put('/dashboard/admin/{admin}','AdminController@update');

//<!--  place [CRUD] -->
Route::get('/dashboard/manage_places','PlaceController@create');
Route::post('/dashboard/manage_places','PlaceController@store');
Route::get('/dashboard/manage_places/{place}/edit','PlaceController@edit');
Route::put('/dashboard/manage_places/{place}','PlaceController@update');
Route::get('/dashboard/manage_places/{place}','PlaceController@destroy');

//category[CRUD]
Route::post('/dashboard/category','CategoryController@store');
Route::get('/dashboard/category','CategoryController@create');
Route::get('/dashboard/category/{category}','CategoryController@destroy');
Route::get('/dashboard/category/{category}/edit','CategoryController@edit');
Route::Put('/dashboard/category/{category}','CategoryController@update');

//Room[CRUD]
Route::get('/dashboard/manage_room','RoomController@create');
Route::post('/dashboard/manage_room','RoomController@store');
Route::get('/dashboard/manage_room/{room}','RoomController@destroy');
Route::get('/dashboard/manage_room/{room}/edit','RoomController@edit');
Route::put('/dashboard/manage_room/{room}','RoomController@update');



//Image[CRUD]
Route::get('/dashboard/manage_images','ImageController@create');
Route::post('/dashboard/manage_images','ImageController@store');
Route::get('/dashboard/manage_images/{image}','ImageController@destroy');
Route::get('/dashboard/manage_images/{image}/edit','ImageController@edit');
Route::put('/dashboard/manage_images/{image}','ImageController@update');

//User[CRUD]
Route::get('/dashboard/manage_user','AdminController@usersread');
Route::get('/dashboard/manage_user/{user}/edit','AdminController@edituser');
Route::put('/dashboard/manage_user/{user}','AdminController@userupdate');
Route::get('/dashboard/manage_user/{user}','AdminController@userdestroy');

});



//Route::get('/index', function () {
//    return view('public_veiw.public_home');
//});



//public-Theme[Rooms]
Route::get('/paradise/grid-rooms/{id}','RoomController@gridview');

//public-Theme[Place]
Route::get('/paradise/grid-category/{id}','CategoryController@categryFind');

//public-Theme[Farms]
Route::get('/paradise/all-farm','PlaceController@viewallfarm');
Route::get('/paradise/all-farm/{id}','PlaceController@viewfarm');

//public-Theme[Home]
Route::get('/index','CategoryController@categryView')->name('index');
Route::get('/','CategoryController@index');


//public-Theme[Single Room]
Route::get('/paradise/single-room/{id}','RoomController@singleroom');


//Auth::routes();
//Route::post('/paradise/register','Auth\RegisterController@register');

//Route::get('/home', 'HomeController@index')->name('home');

//public-Theme[login+register Users]
Route::post('/paradise/register','UserRegisterController@store');
Route::post('/paradise/login','LoginController@check');
Route::get('/paradise/login-register','LoginController@index');
Route::get('/paradise/userlogout','LoginController@logout');

//Dashboard-Theme[login]
Route::post('/dashboard/adminlogin','AdminController@check');
Route::get('/dashboard/adminlogin','AdminController@index');
Route::get('/dashboard/adminlogout','AdminController@logout');


//public-Theme[Search]
Route::get('/search','PlaceController@search');



Route::get('/paradise/bookingroom/{id}','BookingController@check');


Route::get('/paradise/booking', function () {
    return view('public_veiw.booking_room');
});

Route::post('/paradise/donebooking','BookingController@store');

Route::get('/paradise/profile/{id}','UserRegisterController@profile');
Route::get('/paradise/booking/{booking}','BookingController@destroy');

Route::get('/paradise/editprofile/{id}','UserRegisterController@editprofile');


 Route::get('/testedit', function () {
     return view('dashboard_veiw.manage_user_edit');
 });
