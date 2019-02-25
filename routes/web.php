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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/cameras', function () {
    return view('frontend.camaras');
});
Route::get('/cameras/book', function () {
    return view('frontend.camera-form');
});
Route::get('/trips/snorkel', function () {
    return view('frontend.single-experience');
});
Route::get('/trips', function () {
    return view('frontend.trips');
});

Route::get('frontend.home','NewsletterController@create');
Route::post('frontend.home','NewsletterController@store')->name('newsletter');

