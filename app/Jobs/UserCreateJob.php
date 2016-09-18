<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class UserCreateJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $firstname;
    public $email;
    public $code;
    public $password;
    public $username;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($firstname,$email,$code,$password,$username)
    {
        $this->firstname  = $firstname;
        $this->email        = $email;
        $this->code         = $code;
        $this->password     = $password;
        $this->username     = $username;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('emails.system_user_welcome', array('firstname'=>$this->firstname,
                                   'link'       =>url('/account-activate',$this->code
                                    ),
          'username'=> $this->username,
          'password'=>$this->password), 
            function($message)
            {
                $message->to($this->email)->subject('No Reply, Welcome!');
            }
            ); 
    }
}
