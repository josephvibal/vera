<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

use Auth;

class ImageController extends Controller
{

    public function get_company_logo($id){

        $user = \App\User::find($id);

        if($user){
            if($user->avatar != ''){
                $contents = Storage::get('/users/' . $user->id .'/company_logo/'.$user->company_logo);                
            }else{
                $contents = Storage::get('/users/default.png');
            }            
        }else{
            $contents = Storage::get('/users/default.png');
        }

        return $contents;

    }

    public function get_user_avatar_by_id($id){
        $user = \App\User::find($id);

        if($user){
            if($user->avatar != ''){
                $contents = Storage::get('/users/' . $user->id .'/user_avatar/'.$user->avatar);                
            }else{
                $contents = Storage::get('/users/default.png');
            }            
        }else{
            $contents = Storage::get('/users/default.png');
        }

        return $contents;
    }

    public function index(){

            if(Auth::user()->avatar != ''){
                $contents = Storage::get('/users/' . Auth::user()->id .'/user_avatar/'.Auth::user()->avatar);
            }else{
                $contents = Storage::get('/users/default.png');
            }

            return $contents;


    }

    public function company(){

            if(Auth::user()->company_logo != ''){
                $contents = Storage::get('/users/' . Auth::user()->id .'/company_logo/'.Auth::user()->company_logo);
            }else{
                $contents = Storage::get('/users/default.png');
            }

            return $contents;
       
    }
}
