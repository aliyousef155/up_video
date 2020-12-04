<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplayContact extends Mailable
{
    use Queueable, SerializesModels;

  protected $messageContent;

  protected $replay;
    public function __construct($message,$replay)
    {
       $this->message=$message;

       $this->replay=$replay;
    }


    public function build()
    {
        $messageContent=$this->message;
        $replay=$this->replay;
        return $this->to($messageContent->email)
        ->view('Dashboard.mails.replay-message',compact('messageContent','replay'));
    }
}
