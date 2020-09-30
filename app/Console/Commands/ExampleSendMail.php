<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use App\Mail\ExampleMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ExampleSendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for exemplify the mail sending in laravel';

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
        dispatch(new SendEmailJob());
//            new SendEmailJob()
//        Mail::to('example@mailinator.net')->send(new ExampleMail());
    }
}
