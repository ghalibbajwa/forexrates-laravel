<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendingEmail extends Mailable
{
    use Queueable, SerializesModels;

/**
* Create a new message instance.
*
* @return void
*/

    public $data;

    public function __construct($data)
    {
       
        $this->data['code'] = $data;
    }

/**
* Build the message.s
*
* @return $this
*/
    public function build()
    {
        
        return $this->subject('OTP')
                    ->view('emails.otp_email')
                    ->with('emails', $this->data);
}
}