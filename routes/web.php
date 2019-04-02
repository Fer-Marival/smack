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

Route::resource('/cameras', 'Frontend\ArticlesController');
Route::get('/getcameras', 'Frontend\ArticlesController@getProducts')->name('get.cameras');
Route::get('/getcomplements', 'Frontend\ArticlesController@getComplements')->name('get.complements');
Route::get('/gettours','Frontend\ArticlesController@getTour')->name('get.tours');


Route::resource('/newslater', 'Frontend\NewSlaterController');


Route::get('/trips/snorkel', function () {
    return view('frontend.single-experience');
});
Route::get('/trips', function () {
    return view('frontend.trips');
});

//Route::get('/articulos', 'Frontend\ArticlesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{

	Route::resource('/users', 'Admin\UserController');
	Route::get('/list-users', 'Admin\UserController@vista')->name('list.users');
	Route::resource('/products', 'Admin\ProductController');
	Route::resource('/categories', 'Admin\CategoryController');

});


