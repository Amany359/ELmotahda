<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class payment_suucess extends Mailable
{
    use Queueable, SerializesModels;
      
    public $orders ; 
    public $token ; 
    public $link ; 

    public function __construct($orders, $token, $link)
    {
        $this->orders = $orders ; 
        $this->token = $token ; 
        $this->link = $link ; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email_msg.payment_success',
            with:[
                "token" => $this->token,
                "link" => $this->link,
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
