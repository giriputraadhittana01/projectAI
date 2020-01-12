<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$message,$phone,$email)
    {
        $this->name     = $name;
        $this->message  = $message;
        $this->phone    = $phone;
        $this->email    = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name=$this->name;
        $msg=$this->message;
        $phone=$this->phone;
        $email=$this->email;
        
        return $this->view('backend.components.email',compact('name','msg','phone','email'))->subject("GOLDY Feedback");
    }
}
