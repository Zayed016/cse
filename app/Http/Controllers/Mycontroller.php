<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyRequest;
use DB;
use App\Http\Requests;
use Input;
use Validator;
use Redirect;

class Mycontroller extends Controller
{
   

    public function formenu(){
    	$all=DB::table('food')->select('f_id','type','name','price')->orderBy('f_id', 'asc')->get();
    	//echo "<pre>";
    	//print_r($all);
    	return view('menu')->with('all' ,$all);
    }

    public function transaction(){
    	
       // print_r($request->rules());
       // DELETE FROM delivery WHERE time <NOW() - INTERVAL 1 MINUTE AND paid=0
        // $vali=Validator::make($request);
        // if ($vali->fails()) {
        return view('trans');
        // }

    }

    public function atlast(MyRequest $request){

    $lo=input::all();
   // $trans=DB::insert('insert into trans (ref_id, t_id, bill, address, mobile , d_type) values (?, ?, ?, ?, ?, ?)', [ $lo['ref'],0,$lo['pir'],$lo['add'],$lo['mobile'],$lo['de']]);
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
      // $into=DB::insert('insert into delivery (f_list, bill, ref_id) values (?, ?, ?)', [$aid, $total,$rand]);
       foreach ($now as $value) {
          $out[$i]=DB::select('select name,price from food where f_id = :id', ['id' => $value]);
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
