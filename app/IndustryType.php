<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

class IndustryType extends Model
{


	use AuditingTrait;

    protected $table = 'industry_type';
    protected $fillable = [
    	'name','description'
    ];
}
