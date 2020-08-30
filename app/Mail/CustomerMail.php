<?php


namespace App\Mail;

use App\Customers;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;


class CustomerMail extends Mailable
{
    use Queueable;
    use SerializesModels;


    public $customer;
    public $customer_url;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Customers $customer)
    {
        $this->customer = $customer;
        $this->customer_url = URL::temporarySignedRoute(
            'customer-doc', now()->addMinutes(30), ['reference' =>$customer->reference]
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Customer Document')
            ->markdown('emails.customer_document');
    }


}
