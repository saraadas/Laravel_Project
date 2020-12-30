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

Route::get('/', function () {
    return view('welcome');
});

Route::get('manage_admin', function () {
    return view('dashboard_veiw.manage_admin');
})->name('manage_admin');

Route::get('manage_user', function () {
    return view('dashboard_veiw.manage_user');
})->name('manage_user');

Route::get('manage_category', function () {
    return view('dashboard_veiw.manage_category');
})->name('manage_category');

Route::get('manage_hotel', function () {
    return view('dashboard_veiw.manage_hotel');
})->name('manage_hotel');

Route::get('manage_farm', function () {
    return view('dashboard_veiw.manage_farm');
})->name('manage_farm');

Route::get('manage_room', function () {
    return view('dashboard_veiw.manage_room');
})->name('manage_room');

Route::get('manage_hotel_booking', function () {
    return view('dashboard_veiw.manage_hotel_booking');
})->name('manage_hotel_booking');

Route::get('manage_farm_booking', function () {
    return view('dashboard_veiw.manage_hotel_booking');
})->name('manage_farm_booking');
