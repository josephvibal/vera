<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\User;
class AccountRecoverJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         $user = User::where('email','=',$this->email);

         if($user->count())
         {
                            //Generate new code and password
            $code       = str_random(60);
            $password   = str_random(10);

            //updated user account

            $user = $user->first();
            //$user->active                   = 0;
            //$user->force_change_password    = 1;
            $user->code                     = $code;
            $user->password_temp            = bcrypt($password);
            //$user->reason_for_being_locked  = 2;
            if($user->save())
            {
            //notify and send email to user
            Mail::send('emails.recovery', 
                            array(
                                 'link'         => url('/account/recover/'.$code),
                                'newpassword'   => $password,
                                'firstname'    => $user->firstname
                                ), 
                    function($message)
                    {
                        $message->to($this->email)->subject('No Reply, Account Recovery!');
                    }
                    );  

            }
         }
    }
}
