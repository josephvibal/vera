<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\AuditingTrait;

class File extends Model
{
	use AuditingTrait;
 	protected $table = 'files';
    protected $fillable = [
    	'company_id',
    	'file_id',
    	'original_name',
    	'storage_name',
    	'file_type',
    	'shared',
    	'uploaded_by'
    ];

    public function file(){
        return $this->belongsTo('App\SharedFile','shared_to');
    }
}
