<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\AuditingTrait;
class UploadedFile extends Model
{
	
	use AuditingTrait;
 	protected $table = 'uploaded_files';
    protected $fillable = [
    	'company_id',
    	'file_id',
    	'original_name',
    	'storage_name',
    	'file_type'
    ];
}

