<?php

/* Variable de idioma global */

Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);


Route::get('/{lang}', 'Frontend\HomeController@index');

Route::get('/tours-acuaticos', function () {
    return view('frontend.acuaticos');
});
Route::get('/tours-terrestres', function () {
    return view('frontend.terrestres');
});

Route::resource('/{lang}/cameras', 'Frontend\ArticlesController');

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


