<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyCreateRequest extends Request
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
            'company_name'  => 'required|unique:company_profile',
            'tax_id'        => 'required|unique:company_profile',
            'street_address' => 'required',
            'city'          => 'required',
            'phone'         => 'required',
            'email'         => 'required|email|unique:users',
            'website'       => '',
            'industry'      => 'required',
            'organization'  => 'required'
        ];
    }
}
