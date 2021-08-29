<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $fullname;
    protected $email;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $email, $text)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->email, $this->fullname)
            ->subject('Nuovo messaggio')
            ->view('email.contact-mail', ['text'=>$this->text]);
    }
}
