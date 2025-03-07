<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class confirm_product extends Mailable
{
    use Queueable, SerializesModels;

    
    protected $carts ; 
    protected $order ;
    protected $shipping ;
    protected $order_id ;

    public function __construct($carts, $order, $shipping, $order_id)
    {
        $this-> carts = $carts ; 
        $this-> order = $order ; 
        $this-> shipping = $shipping ; 
        $this-> order_id = $order_id ; 
   
    }



    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order details',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email_msg.payment',
            with:[
                "order" => $this->order,
                "shipping" => $this->shipping,
                "order_id" => $this->order_id,
                "carts" => $this->carts
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
