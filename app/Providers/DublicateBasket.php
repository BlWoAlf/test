<?php

namespace App\Providers;

use App\Providers\BasketСhanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DublicateBasket
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
     * @param  BasketСhanged  $event
     * @return void
     */
    public function handle(BasketСhanged $event)
    {
        //
    }
}
