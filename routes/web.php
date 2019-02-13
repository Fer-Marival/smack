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
Route::get('/tours-acuaticos', function () {
    return view('frontend.acuaticos');
});
Route::get('/tours-terrestres', function () {
    return view('frontend.terrestres');
});
Route::get('/cameras', function () {
    return view('frontend.camaras');
});