<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $contactMessage;

    public function __construct($title, $contactMessage)
    {
        $this->title = $title;
        $this->contactMessage = $contactMessage;
    }

    public function build()
    {
        // dd($this->message);
        return $this->view('email.contact',['contactMessage'=>$this->contactMessage,'title'=>$this->title])
        ->subject('contact Email');
    }

    
}
