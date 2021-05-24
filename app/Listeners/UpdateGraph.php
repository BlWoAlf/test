<?php

namespace App\Listeners;

use App\Events\GraphUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\View\Components\Graph;

class UpdateGraph
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
     * @param  GraphUpdated  $event
     * @return void
     */
    public function handle(GraphUpdated $event)
    {
        return false;
        // new Graph([], $event->data);
    }
}
