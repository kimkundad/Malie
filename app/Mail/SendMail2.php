<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail2 extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        $name = trim(($this->details['first_name'] ?? '').' '.($this->details['last_name'] ?? ''));

        $mail = $this->subject('New booking request from '.$name)
                    ->view('emails.email2');

        if (filter_var($this->details['email'] ?? null, FILTER_VALIDATE_EMAIL)) {
            $mail->replyTo($this->details['email'], $name);
        }

        return $mail;
    }

}
