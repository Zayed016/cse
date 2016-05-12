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
Route::get('about','Mycontroller@about');

Route::get('dashboard',function(){
	return view('page');
});

Route::get('d',function(){
	return view('ad');
});

Route::post('new', 'Mycontroller@login');

Route::get('contact', function () {
    return view('contact');
});

Route::get('reservation', function () {
    return view('reservation');
});


Route::get('menu', 'Mycontroller@formenu');

Route::post('buying', 'Mycontroller@sale');

Route::post('final', 'MyController@atlast');
