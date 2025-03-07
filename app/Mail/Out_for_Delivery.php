<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Out_for_Delivery extends Mailable
{
    use Queueable, SerializesModels;

    
    public $orders ; 
    public $token ; 
    public $link ; 
    public $number ; 

    public function __construct($orders, $token,$link, $number)
    {
        $this->orders = $orders ; 
        $this->token = $token ; 
        $this->link = $link ; 
        $this->number = $number ; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Out For Delivery',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email_msg.out_of_dev',
            with:[
                "link" => $this->link,
                "number" => $this->number,
                "token" => $this->token,
                "orders" => $this->orders
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
