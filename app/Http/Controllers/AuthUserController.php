<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndustryType;
use App\Http\Requests;
use App\Http\Requests\CompanyCreateRequest;
use App\Jobs\CompanyCreateJob;
use App\Jobs\UserCreateMailJob;
use App\Jobs\UserCreateJob;
use Auth;
use App\CompanyProfile;
use App\User;
use Storage;
use Mail;
use App\ListOfBIRForm;
use App\User_functions;
use App\Team;
use App\Http\Requests\CreateUserRequest;
use App\Posts;
use DB;
class AuthUserController extends Controller
{
	
	public function __construct(){		
		$this->middleware('auth');
	}

	public function reject_request(Request $request){

		$request = \App\RequestFile::find($request->id);

		$request->status = 2;

		if($request->save()){
			return 'Rejected';
		}else{
			return 'Error Occured Please Try Again Later';
		}

	}

	public function approve_request(Request $request){

		$request = \App\RequestFile::find($request->id);

		$request->status = 1;

		if($request->save()){
			return 'Approved';
		}else{
			return 'Error Occured Please Try Again Later';
		}

		//return $request->id;
	}

	public function request(){
		$req = \App\RequestFile::orderBy('created_at','desc')->paginate(10);

		return view('Auth.request')
				->with('requests',$req)
				->with('title','Vera | Request(s)');

	}

	public function update_user_privilege(Request $request){

		$role = User_functions::where('user_id','=',$request->id);


		if(!$role){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

		$role = $role->first();
    	

    	$create_user 	= ($request->has('create_user')) ? true : false;
    	$edit_user 	 	= ($request->has('edit_user')) ? true : false;
    	$delete_user 	= ($request->has('delete_user')) ? true : false;
    	$create_company = ($request->has('create_company')) ? true : false;
    	$edit_company 	= ($request->has('edit_company')) ? true : false;
    	$delete_company = ($request->has('delete_company')) ? true : false;
    	$create_file 	= ($request->has('create_file')) ? true : false;
    	$edit_file 		= ($request->has('edit_file')) ? true : false;

	    $role->add_company		=	$create_company;
	    $role->edit_company		=	$edit_company;
	    $role->delete_company	=	$delete_company;
	    $role->can_upload_file	=	$create_file;
	    $role->can_edit_file	=	$edit_file;
	    $role->add_user			=	$create_user;
	    $role->edit_user		=	$edit_user;
	    $role->delete_user		=	$delete_user;

	    if($role->save()){
	    	return redirect()->back()->with('global','Privilege updated successfully');
	    }


	}

	public function get_client_user_setting($id){

		$user = User::find($id);

		if(!$user){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

		return view('Auth.admin.account_setting')->with('title','Vera | Client Profile')->with('user',$user);
	}

	public function get_user_files($client_id){
		$user = User::find($client_id);

		if(!$user){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

	    $id = CompanyProfile::where('company_id','=',$client_id)->pluck('id');

		$files = DB::table('shared_files')
		->leftJoin('files','files.id','=','shared_files.file_id')
		->select('files.*')
		->where('shared_files.shared_to','=',$id)->paginate(10);

		$files_count = $files->count();
		return view('Auth.admin.all_client_file')->with('title','Vera | Client File(s)')->with('files_count',$files_count)->with('files',$files)->with('user',$user);	

	}

	public function get_user_publish_blog($id){
		
		$user = User::find($id);

		if(!$user){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}
		
		$posts = Posts::where('author_id',$user->id)->where('active','1')->orderBy('created_at','desc')->paginate(5);
		$title = 'Vera | My Drafts';
		return view('Auth.admin.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts)->with('user',$user);		
	}	


	public function get_user_draft_blog($id){
		
		$user = User::find($id);

		if(!$user){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
		$title = 'Vera | My Drafts';
		return view('Auth.admin.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts)->with('user',$user);;		
	}

	public function get_user_by_id_all_blog($id){

		$user = User::find($id);

		if(!$user){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

		$posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
		return view('Auth.admin.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts)->with('user',$user);;		
	}
	
	public function get_user_by_id($id){

		$data['user'] = User::find($id);
		$user = $data['user'];
		if(!$data['user']){
			return view('errors.file_not_found')->with('title',' Vera | Error');
		}

		if(!$user->admin){
			$id = CompanyProfile::where('company_id','=',$id)->pluck('id');

			$files = DB::table('shared_files')
			->leftJoin('files','files.id','=','shared_files.file_id')
			->select('files.*')
			->where('shared_files.shared_to','=',$id);
			$data['files'] = $files->paginate(10);
			$data['files_count'] = $files->count();			
		}
		//dd($files);
		$data['author'] = true;

		$data['comments_count'] = $data['user']->comments->count();
		$data['posts_count'] = $data['user']->posts->count();
		$data['posts_active_count'] = $data['user']->posts->where('active', 1)->count();
		$data['posts_draft_count'] = $data['posts_count'] - $data['posts_active_count'];
		$data['latest_posts'] = $data['user']->posts->where('active', 1)->take(5);
		$data['latest_comments'] = $data['user']->comments->take(5);
		$data['title']	= 'Vera | Account Overview';		

		return view('Auth.admin.account_profile',$data);

	}

	public function post_search_user(Request $request){

			$users = User::where('company_name','LIKE','%'.$request->value.'%')
						->orWhere('email','LIKE','%'.$request->value.'%')
						->orWhere('username','LIKE','%'.$request->value.'%')
						->orWhere('first_name','LIKE','%'.$request->value.'%')
						->orWhere('last_name','LIKE','%'.$request->value.'%')
						->paginate(10);
			return view('Auth.ajax.find_user')->with('users',$users);
	}

	public function show_all_user(){

		$users = User::paginate(10);
		return view('Auth.find_user')
		->with('users',$users)
		->with('title','Vera | Show User(s)');
	}

	public function create_new_user(CreateUserRequest $request){

    	$create_user 	= ($request->has('create_user')) ? true : false;
    	$edit_user 	 	= ($request->has('edit_user')) ? true : false;
    	$delete_user 	= ($request->has('delete_user')) ? true : false;
    	$create_company = ($request->has('create_company')) ? true : false;
    	$edit_company 	= ($request->has('edit_company')) ? true : false;
    	$delete_company = ($request->has('delete_company')) ? true : false;
    	$create_file 	= ($request->has('create_file')) ? true : false;
    	$edit_file 		= ($request->has('edit_file')) ? true : false;

		$password = str_random(6);
    	$encpassword = bcrypt($password);
    	$code = str_random(60);
    	$pwd_expiration = date('Y-m-d', strtotime("+90 days"));


		$user_create = User::create([

			       'company_name'					=>	'Vera',
			       'email'							=>  $request->email,
			       'username'						=>  $request->username,
			       'password'      					=> $encpassword,
            	   'old_password'  					=> $encpassword,
            	   'code'          					=> $code,
                   'active'        					=> '0',
			       'password_expiration_date'		=> $pwd_expiration,
			       'force_change_password' 			=> 1,
			       'admin'							=> 1,
			       'role'							=> 'Admin',
			       'first_name'						=> $request->first_name,
			       'last_name'						=> $request->last_name,
			       'gender'							=> $request->gender,
			       'mobile_number'					=> $request->mobile_number,
			       'interest'						=> $request->interest,
			       'occupation'						=> $request->occupation,
			       'about'							=> $request->about,
			       'online_portfolio'				=> $request->online_portfolio,
			       'reason_for_being_locked'		=> 1,
			       'created_by'						=>	\Auth::user()->id
    	
			
			]);

		if($user_create){
			$create_user_role = User_functions::create([

					'user_id'			=>	$user_create->id,
			    	'add_company'		=>	$create_company,
			    	'edit_company'		=>	$edit_company,
			    	'delete_company'	=>	$delete_company,
			    	'can_upload_file'	=>	$create_file,
			    	'can_edit_file'		=>	$edit_file,
			    	'add_user'			=>	$create_user,
			    	'edit_user'			=>	$edit_user,
			    	'delete_user'		=>	$delete_user,
			    	'created_by'		=>	\Auth::user()->id

				]);

			Storage::makeDirectory('users/'.$user_create->id);
	    	Storage::makeDirectory('users/'.$user_create->id .'/company_logo');
	    	Storage::makeDirectory('users/'.$user_create->id .'/user_avatar');

	    $job = (new UserCreateJob($request->first_name,$request->email,$code,$password,$request->username))->delay(5);
		$this->dispatch($job);	    	
	    return redirect()
	    		->back()
	    		->with('global','User Successfully Enrolled!,An email is also sent to notify the user!');	
		}
	}

	public function add_new_user(){
		if(!\Auth::user()->functions->add_user){
			return view('errors.user_error_cridentials')->with('title',' Vera | Error');
		}
		return view('Auth.add_user')->with('title','Vera | Add System User');
	}

	public function forcechangepassword(){
		
		$headerMsg = '';
		$shortMsg = '';

		if(Auth::user()->force_change_password){
			if(Auth::user()->reason_for_being_locked == 1)
			{
			$headerMsg = '<div class="hero-unit"><h1 class="pagetitle">Help us protect your account!</h1></div>';
			$shortMsg = '<p class="tagline">Upon your initial login, We require you to change your password.</p>';
			}elseif(Auth::user()->reason_for_being_locked == 2)
			{
			$headerMsg = '<div class="hero-unit"><h1 class="pagetitle">Help us protect your account!</h1></div>';
			$shortMsg = '<p class="tagline">Upon your account Recovery, We require you to change your password.</p>';
			}elseif(Auth::user()->reason_for_being_locked == 3)
			{
			$headerMsg = '<div class="hero-unit"><h1 class="pagetitle">Help us protect your account!</h1></div>';
			$shortMsg = '<p class="tagline">Your password has expired!, We require you to change your password.</p>';				
			}
		}else{
			return redirect('/');
		}



		
		return view('Auth.ChangePassword')
				->with('title','Change Password')
				->with('headerMsg',$headerMsg)
				->with('shortMsg',$shortMsg);
	}


	public function create_company(CompanyCreateRequest $request){

		$email = $request->email;

		$password = str_random(6);
    	$encpassword = bcrypt($password);
    	$code = str_random(60);
    	$pwd_expiration = date('Y-m-d', strtotime("+90 days"));
    	$createuser = User::create([
            'company_name'  			=>  $request->company_name,
            'email'         			=>  $request->email,
            'username'      			=> $request->email,
            'password'      			=> $encpassword,
            'old_password'  			=> $encpassword,
            'code'          			=> $code,
            'active'        			=> '0',
            'is_admin'      			=> '0',
            'force_change_pasword'  	=> '1',
            'role'          			=> 'author',
            'force_change_password'		=> '1',
            'reason_for_being_locked'	=>	'1',
			'password_expiration_date'	=> $pwd_expiration,             

        ]);

		

	    if($createuser){
	    	    $createcompany = CompanyProfile::create([
	               'company_id'     			=> $createuser->id,
	               'company_name'   			=>  $request->company_name,
	               'legal_name'     			=>  $request->legal_name,
	               'tax_id'         			=>  $request->tax_id,
	               'street_address' 			=>  $request->street_address,
	               'city'           			=>  $request->city,
	               'phone'          			=>  $request->phone,
	               'email'          			=>  $request->email,     
	               'website'        			=>  $request->website,
	               'type_of_org'    			=>  $request->industry,
	               'created_by'     			=> Auth::user()->id,
          
	        ]);

	    //create client or user directory

	    Storage::makeDirectory('users/'.$createuser->id);
	    Storage::makeDirectory('users/'.$createuser->id .'/company_logo');
	    Storage::makeDirectory('users/'.$createuser->id .'/user_avatar');
	    //send email activation code to user 
	    $job = (new UserCreateMailJob($request->company_name,$request->email,$code,$password))->delay(5);
		$this->dispatch($job);

					

	   	return redirect('/add-company')->with('global','Company Successfully Enrolled!,An email is also sent to notify the user!');
	    }else{
	    	return redirect('/add-company')->with('global','There was an Error processing your request, Please try again Later');
	    }


	}


	public function get_company($id){
		$companyProfile = CompanyProfile::find($id);
		return view('Auth.admin.company_profile')
		->with('title','Vera | Comapny Profile')
		->with('companyProfile',$companyProfile);
	}

	public function add_company(){
		$itype = IndustryType::get();
		return view('Auth.company_add')->with('title','Add Company')->with('itype',$itype);
	}

	public function search_post_company(Request $request){
		
			$company = CompanyProfile::where('company_name','LIKE','%'.$request->value.'%')
						->orWhere('legal_name','LIKE','%'.$request->value.'%')
						->orWhere('tax_id','LIKE','%'.$request->value.'%')
						->orWhere('city','LIKE','%'.$request->value.'%')
						->orWhere('email','LIKE','%'.$request->value.'%')
						->paginate(15);
			return view('Auth.ajax.companies')->with('title','Company')->with('company',$company);
		
	}

	public function company(){
		$company = CompanyProfile::paginate(15);
		return view('Auth.company')->with('title','Company')->with('company',$company);
	}

   public function dashboard(){
   		$req_count = \App\RequestFile::where('created_at','=','Now()')->count();

   		return view('Auth.dashboard')
   				->with('req_count',$req_count)
   				->with('title','Vera | Dashboard');   
   	}

  public function logout(){
  	
  	Auth::logout();
  	return redirect('/login')->with('global','You have logged out.');
  }
}
