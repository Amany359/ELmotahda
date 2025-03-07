<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contact_us extends Mailable
{
    use Queueable, SerializesModels;

   
    protected $name ; 
    protected $email ;
    protected $message ; 
    protected $phone ; 
    protected $token ; 

    public function __construct($name, $email, $message, $phone, $token)
    {
        $this-> name = $name ; 
        $this-> email = $email ; 
        $this-> message = $message ; 
        $this-> phone = $phone ; 
        $this-> token = $token ; 
    }



    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact US Message',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'website.layouts.request',
            with:[
                "name" => $this->name,
                "messages" => $this->message,
                "phone" => $this->phone,
                "email" => $this->email,
                "token" => $this->token
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
