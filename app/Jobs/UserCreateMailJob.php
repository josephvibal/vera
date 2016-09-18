<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
class UserCreateMailJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $companyname;
    public $email;
    public $code;
    public $password;

    public function __construct($companyname,$email,$code,$password)
    {
        $this->companyname  = $companyname;
        $this->email        = $email;
        $this->code         = $code;
        $this->password     = $password;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('emails.welcome', array('companyname'=>$this->companyname,
                                           'link'       =>url('/account-activate',$this->code
                                            ),
                  'email'=> $this->email,
                  'password'=>$this->password), 
                    function($message)
                    {
                        $message->to($this->email)->subject('No Reply, Welcome!');
                    }
                    );                
    }

}
