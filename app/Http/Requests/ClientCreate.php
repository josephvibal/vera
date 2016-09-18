<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientCreate extends Request
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
                'first_name'     =>'required|max:20|min:3',
                //'last_name'         =>'required|max:20|min:3',
                //'email'             =>'required|max:50|email|unique:users',
                //'password'          =>'required|min:6',
               // 'password_again'    =>'required|same:password'
        ];
    }
}
