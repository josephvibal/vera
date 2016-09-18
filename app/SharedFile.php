<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
class SharedFile extends Model
{
	
	use AuditingTrait;
 	
 	protected $table = 'shared_files';
    protected $fillable = [
    	'folder_id',
    	'file_id',
    	'shared_to',
    	'active',
    	'shared_by',
    ];

    public function sharedFiles(){
    	return $this->belongsTo('App\User','shared_to');
    }

    public function getSharedFile(){
    	return $this->hasMany('App\File','id');
    }
}
