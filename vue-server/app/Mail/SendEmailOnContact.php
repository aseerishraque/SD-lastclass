<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailOnContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject;
    public $message;

    public $contact;

    public function __construct($sub, $msg, $contact)
    {
        $this->subject = $sub;
        $this->message = $msg;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.index')->with([
                        'key_sub' => $this->subject,
                        'key_msg' => $this->message,
                        'key_contact' => $this->contact
        ]);
    }
}
