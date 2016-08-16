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

Route::get('/', ['as' => 'home', function () { 
 return view('home');
  }]);
 
Route::get('home', ['as' => 'home', function () {
  return view('home')
  ;}]);
 
Route::get('admin', ['as' => 'admin' , function(){

    if (Auth::check()) {
    return Redirect::to('dashboard');
    } 
    else return view('ad');
    }]);

Route::group([ 'middleware' => 'admin'], function() {
 
Route::get('dashboard',['as' => 'dashboard','uses' =>'Mycontroller@info'] );

Route::get('order', ['as' => 'order','uses' =>'Mycontroller@order']);

Route::get('report', ['as' => 'report','uses' =>'Mycontroller@report']);

Route::get('fooding', ['as' => 'fooding','uses' =>'Mycontroller@fooding']);

Route::get('editfood/{id}',['as' => 'editfood','uses' =>'Mycontroller@newedit']);

Route::post('foodedit',['as' => 'editfood','uses' =>'Mycontroller@updatefood']);

Route::get('addfood',function(){

        $types=DB::select('select * from foodtypes');

        return view('addfood')->with(compact('types'));
    });
    Route::post('foodadd',function(){

        $all=Input::all();

     $in=DB::table('foods')->insert([
    ['name' => $all['name'], 'type_id' => $all['type'] ,'price' => $all['price']]
            ]);

     if($in==true){
            Session::flash('status', 'Data added successfully!');
        } else {
           Session::flash('status', 'Date addition unsuccessful!'); 
        } 
         return redirect()->intended('fooding');
    });

    Route::get('addtype',function(){

         $types=DB::select('select * from foodtypes');

         return view('type')->with(compact('types'));
    });
    Route::post('typeadd',function(){

        $all=Input::all();

     $in=DB::table('foodtypes')->insert(['name' => $all['type'] ]);

        if($in==true){
            Session::flash('status', 'Data added successfully!');
        } else {
           Session::flash('status', 'Date addition unsuccessful!'); 
        } 
         return redirect()->intended('addtype');
    });

    Route::get('deletefood/{id}',function($id){

        $del=DB::table('foods')->where('id', '=', $id)->delete();

        if($del==true){
            Session::flash('status', 'Data delete was successful!');
        } else {
           Session::flash('status', 'Date delete was unsuccessful!'); 
        } 
         return redirect()->intended('fooding');
    });


    Route::get('res',function(){
        $t = time();
        $date = date("Y-m-d H:i:s", $t);
       
        
        $get=DB::table('reserve')->where('when','>',$date)->orderby('when','desc')->take(5)->get();
        return view('showreserve')->with(compact('get'));
    });

    Route::get('stuff', ['as' => 'stuff','uses' =>'Mycontroller@stuff']);

    Route::get('received',function(){
        $get=DB::table('contact')->where('status','=','0')->orderby('c_time','desc')->get();
        return view('feedback')->with(compact('get'));
    });
    Route::get('rece/{id}', function($id){

       $get=DB::table('contact')->where('id','=',$id)->get();
       return view ('feedbackdetails')->with(compact('get'));
    });
});
    Route::post('ok',function(){
        $all=Input::all();
        
        $in=DB::table('contact')->where(['id'=>$all['id']])->update(['status' => $all['status'] ]);
        return Redirect::to('received');

    });

    Route::get('logout', ['as' => 'logout', function(){
	Auth::logout();
	return view('ad');
}]);



Route::get('contact', ['as' => 'contact', function () {
    return view('contact');
}]);

Route::get('reservation',['as' => 'reservation', function () {
    return view('reservation');
}]);

Route::post('booking', ['as' => 'booking','uses' =>'Mycontroller@reserve']);

Route::get('about', ['as' => 'about','uses' =>'Mycontroller@about']);

Route::get('menu', ['as' => 'menu','uses' =>'Mycontroller@formenu'] );

Route::post('buying', ['as' => 'buying','uses' =>'Mycontroller@sale']);

Route::post('send', ['as' => 'send','uses' =>'Mycontroller@message']);

Route::post('final', ['as' => 'final','uses' =>'Mycontroller@atlast'] );
