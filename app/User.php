<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\AuditingTrait;
class User extends Authenticatable
{
    
   use AuditingTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'company_name',
       'email',
       'username',
       'password',
       'password_temp',
       'code',
       'active',
       'password_expiration_date',
       'login_attempt',
       'force_change_password',
       'old_password',
       'admin',
       'role',
       'first_name',
       'last_name',
       'gender',
       'mobile_number',
       'interest',
       'occupation',
       'about',
       'online_portfolio',
       'reason_for_being_locked'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function file_requests(){

      return $this->hasMany('App\RequestFile','requested_by');

    }


          // user company
    public function companyProfile()
    {
      return $this->hasOne('App\CompanyProfile','company_id');
    }


      // user functions
    public function functions()
    {
      return $this->hasOne('App\User_functions','user_id');
    }

    // user has many files
    public function file()
    {
      return $this->hasMany('App\SharedFile','shared_to');
    }    

    // user has many posts
    public function posts()
    {
      return $this->hasMany('App\Posts','author_id');
    }
    
    // user has many comments
    public function comments()
    {
      return $this->hasMany('App\Comments','from_user');
    }
    
    public function can_post()
    {
      $role = $this->role;
      if($role == 'author' || $role == 'admin' || $this->admin)
      {
        return true;
      }
      return false;
    }

    public function isAdmin()
    {
        return $this->admin;
    }

    public function ForceChangePassword()
    {
      return $this->force_change_password;
    }

    
}
