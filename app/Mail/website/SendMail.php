<?php

namespace App\Mail\website;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username ; 
    public $title ; 
    public $msg ; 
    public $token_base ; 

   
    public function __construct($username, $title, $msg, $token_base)
    {
        //
        $this->username = $username ; 
        $this->msg = $msg ; 
        $this->title = $title ; 
        $this->token_base = $token_base ; 

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: env('Laravel'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            with: [
                'username' => $this->username,
                'title' => $this->title,
                'token_base' => $this->token_base,
                'msg' => $this->msg
            ],
            view: 'website.layouts.send_mail',
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
