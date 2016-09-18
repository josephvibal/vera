<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

class Comments extends Model {
	
	use AuditingTrait;
	//comments table in database
	protected $guarded = [];
	
	// user who commented
	public function author()
	{
		return $this->belongsTo('App\User','from_user');
	}
	
	public function post()
	{
		return $this->belongsTo('App\Posts','on_post');
	}

}
