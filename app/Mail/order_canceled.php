<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class order_canceled extends Mailable
{
    use Queueable, SerializesModels;

     
    protected $orders ; 
    protected $token ;
    protected $reason ;

    public function __construct($orders, $token, $reason)
    {
        $this-> orders = $orders ; 
        $this-> token = $token ; 
        $this-> reason = $reason ; 
   
    }



    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order canceled',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email_msg.order_canceled',
            with:[
                "token" => $this->token,
                "reason" => $this->reason,
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
