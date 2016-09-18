<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientCreateJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $first_name;
    public $last_name;
    public $email;
    public $password;

    public function __construct($first_name,$last_name,$email,$password)
    {
        $this->$first_name = $first_name;
        $this->$last_name = $last_name;
        $this->$email = $email;
        $this->$password = $password;
      
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }

}
