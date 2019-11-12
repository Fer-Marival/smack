<?php

/* Variable de idioma global */

Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);


Route::get('/', 'Frontend\HomeController@index');

Route::resource('/trips', 'Frontend\TourController');

Route::get('/tours-terrestres', function () {
    return view('frontend.terrestres');
});

Route::resource('/cameras', 'Frontend\ArticlesController');

Route::resource('/newslater', 'Frontend\NewSlaterController');


Route::get('/trips/snorkel', function () {
    return view('frontend.single-experience');
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
    Route::resource('/services', 'Admin\ServicesController');
    Route::resource('/destinos', 'Admin\DestinosController');
    Route::resource('/tours', 'Admin\ToursController');

});


