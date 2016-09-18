<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\CompanyProfile;
use App\User;
use Auth;
use Storage;
class CompanyCreateJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */     
    public $company_name;
    public $email;       
    public $password
    public $link

    public function __construct($company_name,$email,$password)
    {
       // $this->image          =    $image;      
        $this->company_name   =    $company_name;
        $this->email          =    $email;
        $this->password       =    $password
          
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         

    }
}
