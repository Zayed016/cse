<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class Mycontroller extends Controller
{
   

    public function formenu(){
    	$all=DB::table('food')->select('f_id','type','name','price')->orderBy('f_id', 'asc')->get();
    	//echo "<pre>";
    	//print_r($all);
    	return view('menu')->with('all' ,$all);
    }

    public function method(){
    	echo "ok";
    	//echo $d;
    }
    public function sale(){
    	echo "ok";

        $n = $_POST['hidName'];
$t = $_POST['hidType'];
$p = $_POST['hidPrice'];

echo "Name: " . $n . "<br>";
echo "Type: " . $t . "<br>";
echo "Price: " . $p . "<br>";
    }
}
