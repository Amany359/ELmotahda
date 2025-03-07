<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected $user; 
    protected $token_verify; 
    public function __construct($user, $token_verify)
    {
        $this->user = $user ;
        $this->token_verify = $token_verify ;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'VerifyEmail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'website.layouts.email_admin_verify',
            with: [
                "email" => $this -> user -> email,
                "username" => $this -> user -> username,   
                "token_verify" => $this -> token_verify,   
                "token" => $this -> user->token_base
            ]
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
