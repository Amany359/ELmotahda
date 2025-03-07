<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class create_email extends Mailable
{
    use Queueable, SerializesModels;

   
     
     protected $username ; 
     protected $email ;
 
     public function __construct($username, $email)
     {
         $this-> username = $username ; 
         $this-> email = $email ; 
    
     }
 
 
 
     public function envelope(): Envelope
     {
         return new Envelope(
             subject: 'create account',
         );
     }
 
     /**
      * Get the message content definition.
      */
     public function content(): Content
     {
         return new Content(
             view: 'email_msg.create_account',
             with:[
                 "username" => $this->username,
                 "email" => $this->email
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
