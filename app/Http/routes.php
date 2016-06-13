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
    Route::get('order','Mycontroller@order');

    Route::get('fooding','Mycontroller@fooding');

    Route::get('editfood/{id}',function ($id) {
        $food=DB::select('select * from foods where id = :id', ['id' => $id]);
        $list=DB::select('select * from foodtypes');
        return view('foodediting')->with(compact('food','list'));
    });
    
    Route::post('foodedit','Mycontroller@updatefood');

    Route::get('deletefood/{id}',function($id){
        $del=DB::table('foods')->where('id', '=', $id)->delete();;
        if($del==true){
            Session::flash('status', 'Data delete was successful!');
        } else {
           Session::flash('status', 'Date delete was unsuccessful!'); 
        } 
         return redirect()->intended('fooding');
    });

    Route::get('res','Mycontroller@res');
    Route::get('stuff','Mycontroller@stuff');
    Route::get('received','Mycontroller@fromcustomer');
	
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
