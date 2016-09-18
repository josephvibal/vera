<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
class ListOfBIRForm extends Model
{
	
	use AuditingTrait;
 	protected $table = 'list_of_files';
    protected $fillable = [
    	'form_title','form_description'
    ];
}
