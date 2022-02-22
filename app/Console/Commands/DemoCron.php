<?php

namespace App\Console\Commands;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewDemoMail;
use Illuminate\Console\Command;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = Customer::all();
        foreach($users as $user){
            $email = $user->email;
          Mail::to($email)->send(new NewDemoMail($users));
        }
        
    }
}
 