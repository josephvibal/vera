<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use OwenIt\Auditing\AuditingTrait;

class CompanyProfile extends Model
{
      use AuditingTrait;
       protected $table = 'company_profile';
       protected $fillable = [
       'company_id',
       'company_name',
       'legal_name',
       'tax_id',
       'street_address',
       'city',
       'phone',
       'fax',
       'email',
       'website',
       'type_of_org',
       'created_by'
    ];

      public function companyProfile()
      {
            return $this->belongsTo('App\User','id');
      }

}
