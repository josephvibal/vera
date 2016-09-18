<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Http\Requests;
use App\ListOfBIRForm;
use Storage;

class UserController extends Controller
{
	public function update_pesonal_info(Request $request){
		$rules = ['first_name' => 'required' , 'last_name' => 'required',];

		if($request->email != \Auth::user()->email){
	
			$emailRule = array('email' => 'required|email|unique:users,email');

			$rules = array_merge($rules,$emailRule);
		}

		if($request->username != \Auth::user()->username){
	
			$usernameRule = array('username' => 'required|unique:users,username');
			
			$rules = array_merge($rules,$usernameRule);
		}		

		$this->validate($request,$rules);

		$user = \Auth::user();
		$user->username        		=	$request->username;  
		$user->email            	=	$request->email;           
		$user->first_name       	=	$request->first_name;      
		$user->last_name        	=	$request->last_name;       
		$user->mobile_number    	=	$request->mobile_number;   
		$user->interest         	=	$request->interest;        
		$user->occupation       	=	$request->occupation;      
		$user->about            	=	$request->about;           
		$user->online_portfolio 	=	$request->online_portfolio;
		
		if($user->save()){
			return response()->json('Personal Information Succesfully Updated!');			
		}else{
			return response()->json('Unable to process your request, Please try again later');			
		}

	}

	public function updateAvatar(Request $request){
		//users/Auth::user()->id/user_avatar
		//field name avatar
    	$this->validate($request, ['file'	=>	'required']);

    	$file = $request->file;

       // dd($request->type);
        $destinationPath = storage_path() .'/app/users/'. \Auth::user()->id .'/user_avatar';
        $originalFileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename = md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . '.' . $extension; // renameing image
        $upload_success=$file->move($destinationPath, $filename);			
		
		if ($upload_success) {
			$user = \Auth::user();
			$user->avatar = $filename;
			$user->save();
			
			return redirect()->back();
		}
		
	}

	public function post_update_password(Request $request){

		 
		   $this->validate($request, [
		   			'current_password'	=> 'required|check_hash',
                    'password' 			=> 'required|confirmed|check_if_current_password',
            ]);

	    $credentials = $request->only(
        'email', 'password', 'password_confirmation'
	    );	
	    
	    $pwd_expiration = date('Y-m-d', strtotime("+90 days"));
	    $user = \Auth::user();
	    $user->password = bcrypt($credentials['password']);
	    $user->force_change_password = 0;
	    $user->reason_for_being_locked = 0;
	    $user->password_expiration_date = $pwd_expiration;
	    $user->save();	   
		return response()->json('Password successfully Updated');
	}

	public function profileSetting(){
		
		return view('Auth.account_setting')->with('title','Vera | Account Setting');
	}

	public function showProfile(Request $request){
		$data['user'] = User::find(\Auth::user()->id);



		if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
			$data['author'] = true;
		} else {
			$data['author'] = null;
		}
		$data['comments_count'] = $data['user']->comments->count();
		$data['posts_count'] = $data['user']->posts->count();
		$data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
		$data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
		$data['latest_posts'] = $data['user']->posts->where('active', 1)->take(5);
		$data['latest_comments'] = $data['user']->comments->take(5);
		$data['title']	= 'Vera | Account Overview';
		return view('Auth.account_profile',$data);
	}

	public function forcepostchangepassword(Request $request){
		//'password'				 => 'required|min:8|strength|confirmed',
	    $this->validate($request, [
	            'password'				 => 'required|confirmed',
	            
	    ]);
	    $credentials = $request->only(
	            'email', 'password', 'password_confirmation'
	    );

	    $pwd_expiration = date('Y-m-d', strtotime("+90 days"));

	    $user = \Auth::user();
	    $user->password = bcrypt($credentials['password']);
	    $user->force_change_password = 0;
	    $user->reason_for_being_locked = 0;
	    $user->password_expiration_date = $pwd_expiration;
	    $user->save();	

	    if($user->admin){
		    return redirect('/dashboard')->with('global','Password Succesfully Updated!');	    	
	    }else{
	    	return redirect('/my-company-profile')->with('global','Password Succesfully Updated!');
	    }



	} 

	public function showall(){
		
		$users = User::get();
	    
	    return [$users];
	}

    /*
	 * Display the posts of a particular user
	 * 
	 * @param int $id
	 * @return Response
	 */
	public function user_posts($id)
	{
		//
		$posts = Posts::where('author_id',$id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = User::find($id)->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}

	public function user_posts_all(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}
	
	public function user_posts_draft(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
		$title = $user->name;
		return view('home')->withPosts($posts)->withTitle($title);
	}

	/**
	 * profile for user
	 */
	public function profile(Request $request, $id) 
	{
		$data['user'] = User::find($id);
		if (!$data['user'])
			return redirect('/');

		if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
			$data['author'] = true;
		} else {
			$data['author'] = null;
		}
		$data['comments_count'] = $data['user']->comments->count();
		$data['posts_count'] = $data['user']->posts->count();
		$data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
		$data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
		$data['latest_posts'] = $data['user']->posts->where('active', 1)->take(5);
		$data['latest_comments'] = $data['user']->comments->take(5);
		return view('admin.profile', $data);
	}
}
