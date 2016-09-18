<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientCreate;
use App\Http\Requests\AuthRequest;
use App\Jobs\ClientCreateJob;
use Auth;
use App\User;
use App\CompanyProfile;
use Storage;
use App\ListOfBIRForm;
use Illuminate\Http\Request;
use App\Jobs\AccountRecoverJob;
use App\File;
use App\SharedFile;
use DB;
Class GuestHomeController extends Controller{

	public function contact_us(){

		return view('contact_us')->with('title','Vera | Contact Us');
	}

	public function getRecoverAccount($code){

            $user = User::where('code','=',$code)
                  ->where('password_temp','!=','');

            if($user->count()){
                $user = $user->first();

                $user->password = $user->password_temp;
                $user->password_temp = '';
                $user->code = '';
                $user->active = 1;
                $user->reason_for_being_locked = 2;
                $user->force_change_password = 1;
                if($user->save()){

                    return redirect('/login')
                    ->with('global','Your account has been recovered, You can now signin with your new password');
                }
            }
            
             return redirect('/login')
                    ->with('global','Could not recover your account');	

	}

	public function postforgotPassword(Request $request){
		
		// if(Session('forgotmessage')){
		// 	session()->forget('forgotmessage');
		// }

		$code = $request->input('CaptchaCode');
	    $isHuman = captcha_validate($code);

	    if (!$isHuman) {
	      return redirect()->back()->with('forgotmessage','Ivalid Captcha Input');
	    } else {
	    	$this->validate($request,[
	    			'email'	=> 'required|email'
	    		]);
	     	
	    		//send email recovery code to user 
			    $job = (new AccountRecoverJob($request->email))->delay(5);
				$this->dispatch($job);
				
	     	 return redirect()->back()->with('forgotmessage','An email was sent to your account');
	      }
	}

	public function forgotPassword(){
		return view('forgot_password')->with('title','Vera | forgot-password');
	}

	public function account_activate($code){
        $user = User::where('code','=',$code)->where('active','=',0);

        if($user->count()){
            $user = $user->first();

            //update to active
            $user->active = '1';
            $user->code = '';

            if($user->save()){
                return redirect('/login')
                    ->with('global','Your account has been activated please sign in to continue');
            }
        }

        return redirect('/login')
            ->with('global','Sorry we could not activate your account, Please try again later');

	}


	public function post_login(AuthRequest $request){
		
		// if(Session('forgotmessage')){
		// 	session()->forget('forgotmessage');
		// }
		$remember = ($request->has('remember')) ? true : false;
		if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1],$remember)) {
		 	
		 	//check password expiration
			$user = \Auth::user();
			
			$password_expiration = explode(' ', $user->password_expiration_date);
			
			$password_expiration = $password_expiration[0];
			
			if(date('Y-m-d') >= $password_expiration){
				
				$user->reason_for_being_locked = 3;
				
				$user->force_change_password = 1;
				
				$user->save();		
			}
		 	
		 	if(Auth::user()->admin){
		 		return redirect()->intended('dashboard');
		 	}else{
		 		
		 		return redirect()->intended('my-company-profile');
		 	}
		 }else{
		 	return redirect()->back()->with('global','username/password was incorrect');
		 }

	}

	public function login(){

		return view('Auth.login');
	}

	public function home(){
		// $filetype  = ListOfBIRForm::get();

		// foreach ($filetype as $x) {
		// 	try {
		// 		Storage::makeDirectory($x->id);
		// 	} catch (Exception $e) {
				
		// 	}
		// }
	// $files = SharedFile::where('shared_to','=','1')->first();

	//  foreach ($files->getSharedFile as $file) {
	//  echo $file->original_name;
	//  }
		// $user = User::find(1);

	 // foreach ($user->file as $x) {
		// 	$files = SharedFile::where('shared_to','=',$x->id)->first();

		// 	 foreach ($files->getSharedFile as $file) {
		// 	 echo $file->original_name.'<br/>';
		// 	 }
		//  }		


		return view('welcome')
		->with('title','Home');
	}

	public function get_create_employee(){
		return view('Auth.EnrollClient')
		->with('title','Enroll Client');
	}

	public function post_create_employee(ClientCreate $request){
		//dd($request->input());

		$this->dispatch(
			new ClientCreateJob(
				$request->first_name,
				$request->last_name,
				$request->email,
				$request->password
			));

	}

	public function about(){
		return view('about')
		->with('title','About');	
	}

}