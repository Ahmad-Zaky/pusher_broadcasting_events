<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateVendorAboutOrder
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderPlaced  $event
     * @return void
     */
    public function handle(OrderPlaced $event)
    {
        info("Vendor was updated about order Nr. ({$event->order->id})");
    }
}
