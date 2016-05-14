<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Admin;
use Authenticatable, CanResetPassword;
use Illuminate\Http\Request;
use App\Http\Requests\MyRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReservationRequest;
use DB;
use App\Http\Requests;
use Input;
use Auth;
use Validator;
use Redirect;
use Illuminate\Routing\Controller;


class Mycontroller extends Controller
{
   

    public function formenu(){
    	//$all=DB::table('food')->select('id','type','name','price')->orderBy('id', 'asc')->get();
    	$lists=DB::select('select * from foodtypes');
    	//print_r($all);
    	return view('menu')->with(compact('lists'));
    }

    public function reserve(ReservationRequest $request){
      $send=$request->all(); 
     print_r($send);
      // DB::table('res')->insert( ['ref_id' => $lo['ref'] ,'food_id' =>$AyeD[$i] ,'type_id' =>$tp[$i] , 'how_many' => $value[$AyeD[$i]] ]  );
  
    }
    public function transaction(){
    	
       // print_r($request->rules());
       // DELETE FROM delivery WHERE time <NOW() - INTERVAL 1 MINUTE AND paid=0
        // $vali=Validator::make($request);
        // if ($vali->fails()) {
        return view('trans');
        // }

    }
    public function message(ContactRequest $request){

     $send=$request->all(); 
     //print_r($send);
    
     $time = date("Y-m-d H:i:s"); 

    $sql=DB::insert('insert into contact (name, email, phone, message, c_time) values (?, ?, ?, ?, ?)', [ $send['name'],$send['email'],$send['phone'],$send['message'],$time]);
     $request->session()->flash('alert-success', 'User was successful added!');
      //return view('contact');
    }
    public function info(){
      $user = Auth::user();
           
           return view('page')->with(compact('user'));
    }
      
                // $username=$request->input('username');
            // $username=admin;
            // $find = Admin::find($username);
            // echo $find;
           //  $find=DB::select('select id from admins where username = :username', ['username' => $request->input('username')]);
           //  foreach ($find as $value) {
           //    $v=$value->id;
           //  }

           //  $ses = array( 'username'=>$request->input('username'),
           //      'logged_in'=>true,  'user_id' => $v
           //      );
           // // 
           //  $request->session()->put('key', $ses);

    public function login(MyRequest $request){ 

      if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
           $user = Auth::user();
           $a=$user->username;
           return  redirect()->intended('dashboard');
        }  else {
        return Redirect::to('admin')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
        }
    // if($auth){  
    //     
    // } else 
    // return Redirect::to('d')->withErrors(array('need' => 'Invalid Username or Password'))->withInput(Input::except('password'));
    
     }

    public function about(){

      $ab=DB::select('select type,name,mobile from stuff');

  
      return view('about')->with(compact('ab'));
    }
    
    public function atlast(){
    
      $total=0;
    $lo=input::all();
  
    $value=$lo['no'];
    $AyeD=$lo['ids'];
    $tp=$lo['types'];
   
   for ($i=1; $i <=sizeof($tp); $i++) { 
      
   DB::table('orderedfood')->insert( ['ref_id' => $lo['ref'] ,'food_id' =>$AyeD[$i] ,'type_id' =>$tp[$i] , 'how_many' => $value[$AyeD[$i]] ]  );
    }
    foreach ($lo['ids'] as $key) {
     $dam=DB::table('foods')->select('price')->where('id', $key)->first();
   
     $total=$total+$dam->price*$value[$key];
     }  
     DB::table('trans')->insert(['name' => $lo['name'] ,'t_id' =>0 ,'ref_id' => $lo['ref'] ,'address' =>$lo['add'] ,'mobile' =>$lo['mobile'] , 'd_type' => $lo['de'], 'd_time' =>$lo['time'], 'bill' => $total]  );
     $lo['pir']=$total;
   return view('trans')->with('last',$lo);
    
    }

    public function sale(){
    	$input=Input::all();
        $rules=array(
            'hidId' =>"required"
            );
             $messages = [
            'required' => '<----Please select some items',
                ];

          $validator = Validator::make($input, $rules, $messages);
         if($validator->fails()){

            return Redirect::back()->withErrors($validator);
        }
        else{
       $i=1;
       $ok['i']=$_POST['hidId'];
       $now=explode(",", $ok['i']);
       $ok['p']=$_POST['hidPrice'];
       $rand=rand(1000,9999);
       $ok['r']=$rand;
       //$ok=array($aid,$total,$rand);
       $to = date("Y-m-d H:i:s"); 
      $into=DB::insert('insert into delivery (f_list, ref_id, time ) values (?, ?, ?)', [$ok['i'], $rand, $to ]);
       foreach ($now as $value) {
          $out[$i]=DB::select('select id,name,price,type_id from foods where id = :id', ['id' => $value]);
          $i++;
       }
       return view('paying')->with(compact('out','ok'));

    }}

    // public function va(){
    //     $in=Input::all();
    //     print_r($in);
    //     $rules=array(
    //         'de' =>"required"
    //         );

    //     $vali=Validator::make($in,$rules);

    //     if($vali->fails()){
    //         return redirect('home')->withErrors($vali);
    //     }
    //     else echo "ok";
    // }
   
}
