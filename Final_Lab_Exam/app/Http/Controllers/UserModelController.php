<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\employe;
use Illuminate\Http\Request;
use App\Http\Requests\EmpRequest;
use Validator;
class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewemplistad(){
        //$emp=employee::all();
       //echo count($emp);
        
    }
     public function viewinsert(){
        return view ('insertEmp');
        
    }
     public function viewinsertpad(Request $req){
        Validator::make($req->all(),[
            'uid'=>'required',
            
            "pass"=>'required',
            'name'=>'required',
            "cmp"=>'required',
            'contuct'=>'required'
        ]);
        $emp= new Emp;
        $emp->userid=$req->uid;
        $emp->pass=$req->pass;
        $emp->name=$req->name;
        $emp->company=$req->cmp;
        $emp->contuct=$req->contuct;

        DB::table('employee')->insert(
    ['id' => '', 'userid' => $req->uid, 'name' => $req->name, 'company' => $req->cmp, 'contuct' => $req->contuct]
    );
         DB::table('user')->insert(
    ['id' => '', 'userid' => $req->uid, 'password' => $req->pass, 'type' => 'employee']
    );


       
        return view ('viewemplist');
        
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserModel  $userModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}
