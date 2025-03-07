<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Engineering extends Mailable
{
    use Queueable, SerializesModels;
  
    protected $company ; 
    protected $email ;
    protected $location ;
    protected $phone ;
    protected $project ;
    protected $message2 ;
    protected $file ;

    public function __construct($company, $email, $phone, $location, $project, $message2, $file)
    {
        $this-> file = $file ; 
        $this-> company = $company ; 
        $this-> email = $email ; 
        $this-> location = $location ; 
        $this-> phone = $phone ; 
        $this-> message2 = $message2 ; 
        $this-> project = $project ; 
   
    }



    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'طلب مقايسة',
        );
    }

    
    
    public function content(): Content
    {
        return new Content(
            view: 'email_msg.Engineering',
            with:[
                "company" => $this->company,
                "file" => $this->file,
                "email" => $this->email,
                "phone" => $this->phone,
                "location" => $this->location,
                "project" => $this->project,
                "message2" => $this->message2
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
