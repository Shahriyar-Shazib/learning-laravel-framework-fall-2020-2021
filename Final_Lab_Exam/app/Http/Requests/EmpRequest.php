<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uid'=>'required'
            
            "pass"=>'required'
            'name'=>'required'
            "cmp"=>'required'
            'contuct'=>'required'
            //
        ];
    }
     public function messages(){
        return[
            "uid.required"=>'user id Can not be empty',
            "pass.required"=>'please insert a password'
            "name.required"=>'name Can not be empty',
            "cmp.required"=>'please insert a Companey name',
            "contuct.required"=>'please insert a contuct'
        ];
    }
}
