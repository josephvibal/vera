<?php

namespace App\Http\Controllers;

use Auth;
use App\ListOfBIRForm;
use Input;
use Validator;
use Response;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;
use App\User;
use Storage;
use App\CompanyProfile;
use App\Http\Requests\CreateFileRequest;
use App\SharedFile;

class FileController extends Controller
{

	public function file_share_create(Request $request){
		$file = SharedFile::where('folder_id','=',$request->folder)
						->where('file_id','=',$request->id)
						->where('shared_to','=',$request->to)
						->where('active','=','1');
		if($file->count()){
			return "File already Shared";
		}else{
			$shareCreate = SharedFile::create([
								'folder_id' => $request->folder,
								'file_id'	=> $request->id,
								'shared_to'	=> $request->to,
								'active'	=> 1,
								'shared_by'	=> Auth::user()->id
							]);
			if($shareCreate){
				return 'File shared';
			}else{
				return 'Error Occured, Please Try Again Later';
			}
		}

	}

	public function postviewshareFile(Request $request){
		
		$file = File::find($request->id);
		$companies = CompanyProfile::get();	
		return view('Auth.ajax.file_to_share')->with('file',$file)->with('companies',$companies);
	}

	public function getfile($id,$fileid){
		

		$storage = File::where('id','=',$fileid)->first();

		$pathToFile = storage_path() .'/files/' . $id . '/';
		
		$pathToFile = storage_path() .'/app/files/' . $id . '/'.$storage->storage_name;
		
		$mimetype = Storage::mimeType('/files/' . $id .'/'.$storage->storage_name);
		
		/*
	
	$content_types = [
    'application/octet-stream', // txt etc
    'application/msword', // doc
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', //docx
    'application/vnd.ms-excel', // xls
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // xlsx
    'application/pdf', // pdf
];


		*/

		return Response()->file($pathToFile,[
				'Content-Disposition'	=> 'inline; filename="' . $storage->original_name . '"',
				'Content-type'			=> $mimetype

			]);
		
	}

	public function view_list_of_file($id){
		$users = User::get();
		$title = '';
		$description = '';
		$filetype  = ListOfBIRForm::get();
		foreach ($filetype as $filetypes) {
			if($filetypes->id == $id){
				$title = $filetypes->form_title;
				$description = $filetypes->form_description;
				$file_id = $filetypes->id;
				break;
			}
		}

		if($title == ''){
			return view('errors.file_not_found')->with('filetype',$filetype)->with('title','Error 404');
		}

		$files = File::where('file_id','=',$id)->orderBy('created_at','desc')->paginate(5);
		return view('Auth.fileview')
				->with('file_id',$file_id)
				->with('filetype',$filetype)
				->with('files',$files)
				->with('filetitle',$title)
				->with('title','Vera | File(s) - ' . $title)
				->with('description',$description)
				->with('users',$users);
	}

	public function getClientfile($id,$fileid){
		
		//validate user

    	$company_id = CompanyProfile::where('company_id','=',\Auth::user()->id)->pluck('id');

    	$checkFile = SharedFile::where('shared_to','=',$company_id)->where('file_id','=',$fileid);

    	if(!$checkFile->count()){
			return view('errors.file_not_found')->with('title','Error 404');	
    	}

		$storage = File::where('id','=',$fileid)->first();

		$pathToFile = storage_path() .'/files/' . $id . '/';
		
		$pathToFile = storage_path() .'/app/files/' . $id . '/'.$storage->storage_name;
		
		if(!file_exists($pathToFile)){
			return view('errors.file_not_found')->with('title','Error 404');
		}

		$mimetype = Storage::mimeType('/files/' . $id .'/'.$storage->storage_name);
		
		return Response()->file($pathToFile,[
				'Content-Disposition'	=> 'inline; filename="' . $storage->original_name . '"',
				'Content-type'			=> $mimetype

			]);		
	}
}
