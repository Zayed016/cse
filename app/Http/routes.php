<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::group([ 'middleware' => 'admin'], function() {

    Route::get('dashboard','Mycontroller@info');
	
});

    Route::get('logout',function(){
	Auth::logout();
	return view('ad');
});

    Route::get('admin',function(){
	return view('ad');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('reservation', function () {
    return view('reservation');
});

Route::post('booking', 'Mycontroller@reserve');

Route::post('new', 'Mycontroller@login');

Route::get('about','Mycontroller@about');

Route::get('menu', 'Mycontroller@formenu');

Route::post('buying', 'Mycontroller@sale');

Route::post('send', 'Mycontroller@message');

Route::post('final', 'Mycontroller@atlast');
