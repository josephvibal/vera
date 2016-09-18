<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::user()->functions->add_user){
            return true;
        }else{
            return false;    
        }
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                "username"          => 'required|unique:users',
                "email"             => 'required|email|unique:users',
                "first_name"        => 'required',
                "last_name"         => 'required',
                'gender'            => 'required'
        ];
    }
}
