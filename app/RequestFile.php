<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\AuditingTrait;

class RequestFile extends Model
{

	use AuditingTrait;

	protected $table = 'requests';

    protected $fillable = [

    		'subject',
    		'request',
    		'status',
    		'remarks',
    		'requested_by'

    ];

    public function requestor()
	{
		return $this->belongsTo('App\User','author_id');
	}
}
