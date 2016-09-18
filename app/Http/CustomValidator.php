<?php

namespace App\Http;

use Auth;
use App\User;
use Hash;

class CustomValidator {

    public function validateStrength($attribute, $value, $parameters, $validator)
    {
        if( preg_match('/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $value) )
            return true;

        return false;
    }

    public function validateHash($attribute, $value, $parameters, $validator){

        if(Hash::check($value,Auth::user()->password)) {
          return true;
        }

        return false;

    }

    public function validateCurrent($attribute, $value, $parameters, $validator){
        
        if(Hash::check($value,Auth::user()->password)) {
          return false;
        }

        return true;    	
    }

}