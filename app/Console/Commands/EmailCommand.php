<?php

namespace App\Console\Commands;

use App\Mail\WelcomeMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:email-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sending emails to the user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('R6LARAVEL@site.com')->send(new WelcomeMail()); //'R6LARAVEL@site.com' is the sender

    }
}
