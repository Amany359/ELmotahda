<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Get_Notified extends Mailable
{
    use Queueable, SerializesModels;

    
    public $email ; 
    public $from2 ; 

    public function __construct($email, $from2)
    {

        $this->email = $email ; 
        $this->from2 = $from2 ; 

    }

 
    

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Get Notified',
        );
    }

 
    

    public function content(): Content
    {
        return new Content(
            view: 'email_msg.get_notified',
            with:[
                "email" => $this->email ,
                "from2" => $this->from2 
            ]
        );
    }

    
    public function attachments(): array
    {
        return [];
    }
}
