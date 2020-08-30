<?php


namespace App\Events;

use App\Customers;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class CustomerEvent
{
    use Dispatchable, SerializesModels;

    public $customer;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Customers $customer)
    {
        $this->customer = $customer;

    }


}
