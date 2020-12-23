<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            "userId"=>'required',
            "pass"=>'required'
            //
        ];
    }
    public function messages(){
        return[
            "userId.required"=>'user id Can not be empty',
            "pass.required"=>'please insert a password'
        ];
    }
}
