<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyUserSender extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->mail = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('eljefe23@hotmail.be')->markdown('mail.validateuser')->subject('Account validated');
    }
}
