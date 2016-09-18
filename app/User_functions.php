<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_functions extends Model
{
    protected $guarded = [];
    protected $table = 'user_functions';
    protected $fillable = [
    	'user_id',
    	'add_company',
    	'edit_company',
    	'delete_company',
    	'can_upload_file',
    	'can_edit_file',
    	'add_user',
    	'edit_user',
    	'delete_user',
    	'created_by'
    	];
	
	public function functions()
	{
		return $this->belongsTo('App\User','id');
	}

}
