<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use Storage;
use App\File;
class DropzoneController extends Controller
{
    public function index(){
    	return view('dropzone');
    }

    public function uploadFiles(Request $request){
    	$file = $request->file;
        $id   = $request->type;
       // dd($request->type);
        $destinationPath = storage_path() .'/app/files/'.$request->type;
        $originalFileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension(); // getting file extension
        $filename = md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . md5(rand(11111, 99999)) . '.' . $extension; // renameing image
        $upload_success=$file->move($destinationPath, $filename);
        
       if ($upload_success) {
            $fileCreate = File::create([
                    'company_id'        => 1,
                    'file_id'           => $id,
                    'original_name'     => $originalFileName,
                    'storage_name'      => $filename,
                    'file_type'         => $extension,
                    'uploaded_by'       => \Auth::user()->id
                ]);
            if($fileCreate){
                $files = File::where('file_id','=',$id)->orderBy('created_at','desc')->paginate(5);
                return view('Auth.ajax.fileview')->with('files',$files);
            }
            
        } else {
            return Response::json('error', 400);
        }
    }
}
