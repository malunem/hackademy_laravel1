<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $fullname;
    protected $email;
    protected $text;

    public function __construct($fullname, $email, $text)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->text = $text;
    }

    public function build()
    {
        return $this
            ->from('info@ricetteitaliane.it', 'RicetteItaliane.it')
            ->subject('Conferma ricezione')
            ->view('email.reply-mail', [
                'fullname'=>$this->fullname,
                'text'=>$this->text
            ]);
    }
}
