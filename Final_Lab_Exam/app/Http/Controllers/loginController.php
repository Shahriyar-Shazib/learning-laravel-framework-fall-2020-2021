<?php

namespace App\Http\Controllers;
use App\Models\UserModel;


use Illuminate\Http\Request;

use App\Http\Requests\loginRequest;
use Validator;


class loginController extends Controller
{
    function viewlogin(){
    	return view('Login.login');
    }
    function Viewafterlogin(Request $r ){
    	
    	$user=UserModel::where('userid',$r->userId)
    					 ->where('password',$r->pass)
    					 ->get();
    	//echo $user[0];
 		if ($user[0]['type']=='Admin')
 		{
 			$r->session()->put('username',$r->userId);
 			$r->session()->put('type',$user[0]['type']);
 			return view('Admin');
 		}

   


    }
     function viewlogout(Request $r){
        $r->session()->flush();
        return view('Login.login');
    }
 function viewsignup(Request $r){
        //$r->session()->flush();
        return view('signup');
    }
    function viewsignupsub(Request $r){
        //$r->session()->flush();
        return view('Login.login');
    }

}
