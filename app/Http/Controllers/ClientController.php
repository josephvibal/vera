<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\CompanyProfile;

use Storage;

use App\Posts;

use DB;

use App\RequestFile;

class ClientController extends Controller
{	

	public function rejected_request(){

		$requests = RequestFile::where('requested_by','=',\Auth::user()->id)
					->where('status','=','2')
					->orderBy('created_at','desc')->paginate(5);
		
		return view('Client.my_request')
				->with('title', 'Vera | My Rejected Request(s)')
				->with('requests',$requests)
				->with('reqtype','Rejected');

	}

	public function pending_request(){

		$requests = RequestFile::where('requested_by','=',\Auth::user()->id)
					->where('status','=','0')
					->orderBy('created_at','desc')->paginate(5);
		
		return view('Client.my_request')
				->with('title', 'Vera | My Pending Request(s)')
				->with('requests',$requests)
				->with('reqtype','Pending');	

	}

	public function approved_request(){

		$requests = RequestFile::where('requested_by','=',\Auth::user()->id)
					->where('status','=','1')
					->orderBy('created_at','desc')->paginate(5);
		
		return view('Client.my_request')
				->with('title', 'Vera | My Approved Request(s)')
				->with('requests',$requests)
				->with('reqtype','Approved');		

	}


	public function update_request(Request $request){
		$rules = ['title' => 'required', 'body' => 'required', 'id' => 'required'];
		$this->validate($request,$rules);

		return response()->json('Working'); 
		//dd($request->request);
	}

	public function view_edit_request(Request $request){

		$req = RequestFile::find($request->id);

		if(!$req){
			return 'Error!';
		}

		return view('Auth.ajax.request')->with('req',$req);

	}

	public function show_all_request(){

		$requests = RequestFile::where('requested_by','=',\Auth::user()->id)->orderBy('created_at','desc')->paginate(5);
		
		return view('Client.my_request')
				->with('title', 'Vera | My Request(s)')
				->with('requests',$requests)
                ->with('reqtype','');
	}

	public function create_request(Request $request){
		
		$this->validate($request, [
									'title'	=>	'required',
									'body'	=>	'required'
									]);


		$requestCreate = RequestFile::create([

			    		'subject'			=>		$request->title,
			    		'request'			=>		$request->body,
			    		'status'			=>		0,
			    		'remarks'			=>		'pending',
			    		'requested_by'		=>		\Auth::user()->id

			]);

		if($requestCreate){
			return redirect('/my-request/add')->with('global','Request sent');
		}

	}

	public function request_view(){
		return view('Client.new_request')->with('title', 'Vera | Create Request');
	}

	public function user_posts_draft(Request $request)
	{
		//
		$user = $request->user();
		$posts = Posts::where('author_id',$user->id)->where('active','0')->orderBy('created_at','desc')->paginate(5);
		$title = 'Vera | My Drafts';
		return view('home')->withPosts($posts)->withTitle($title);
	}


	public function newpost(){

		return view('posts.create')->with('title','Vera | New Post');
	}

	public function showAllPosts(){
		$user = \Auth::user();
		$posts = Posts::where('author_id',$user->id)->orderBy('created_at','desc')->paginate(5);
		return view('Client.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts);
	}

	// public function showPosts(){

	// 	$posts = Posts::where('active','1')->where('author_id','=',\Auth::user()->id)->orderBy('created_at','desc')->paginate(2);

	// 	return view('Client.MyBlog')->with('title','Vera | My Blog')->with('posts',$posts);

	// }

	public function updateCompanyAvatar(Request $request){



    	$this->validate($request, ['file'	=>	'required']);

    	$file = $request->file;

       // dd($request->type);
        $destinationPath = storage_path() .'/app/users/'. \Auth::user()->id .'/company_logo';
        $originalFileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename = md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . '.' . $extension; // renameing image
        $upload_success=$file->move($destinationPath, $filename);			
		
		if ($upload_success) {
			$user = \Auth::user();
			$user->company_logo = $filename;
			$user->save();
			
			return redirect()->back();
		}		
	}

	public function updateCompanyInfo(Request $request){
		$rules = [
					'company_name' 			=>	'required',
					'legal_name'	        =>	'required',
					'tax_id'          		=>	'required',
					'street_address'      	=>	'required',
					'city'       			=>	'required',
					'phone'           		=>	'required|numeric',
					'website'           	=>	'url',
					'type_of_organization'	=>	'required',
				];
		$this->validate($request,$rules);

		$companyProfile = CompanyProfile::where('company_id','=',\Auth::user()->id)->first();

		$companyProfile->company_name 			= $request->company_name; 			
		$companyProfile->legal_name	        	= $request->legal_name;        
		$companyProfile->tax_id          		= $request->tax_id;          	
		$companyProfile->street_address      	= $request->street_address;      
		$companyProfile->city       			= $request->city;       		
		$companyProfile->phone           		= $request->phone;           	
		$companyProfile->fax         			= $request->fax;         		
		$companyProfile->website 				= $request->website; 			
		$companyProfile->type_of_org	= $request->type_of_organization;

		if ($companyProfile->save()){
			return response()->json('Company Profile Updated!');			
		}else{
			return response()->json('Error Occured Please Try Again Later!');			
		}


	}

    public function mydashboard(){
    	$companyProfile = CompanyProfile::where('company_id','=',\Auth::user()->id)->first();
    	return view('client.MyDashboard')->with('title','Vera | My Company Profile')->with('companyProfile',$companyProfile);

    }

    public function getClientFile(){

    	$id = CompanyProfile::where('company_id','=',\Auth::user()->id)->pluck('id');

		$files = DB::table('shared_files')
		->leftJoin('files','files.id','=','shared_files.file_id')
		->select('files.*')
		->where('shared_files.shared_to','=',$id);

		if(!$files->count()){
			return 'You have no files';
		}

			$files = $files->get();

			return view('Client.Myfile')
					->with('files',$files)
					->with('title','Vera | My Files');

    }
}
