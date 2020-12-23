<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class empController extends Controller
{
    public function viewpost(){
        $emp=job::all();
      // echo count($emp);
        return view('post')->with('post',$emp);
        
    }
     public function viewinsertpost(){
        return view ('emppost')
        
    }
     public function viewinsertpostsub(){
        Validator::make($req->all(),[
            'cmpnme'=>'required',
            
            "title"=>'required',
            'location'=>'required',
            "sal"=>'required',
            
        ]);
        
    }
}
