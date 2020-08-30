<?php


namespace App\Listeners;
use App\Events\CustomerEvent;
use App\Mail\CustomerMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class CustomerListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(CustomerEvent $event)
    {
        Mail::to($event->customer->email)
            ->send(new CustomerMail($event->customer));
    }

}
