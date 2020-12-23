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
        $emp=job::all();
       echo count($emp);
        
    }
}
