<?php

namespace App\Listeners\User;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserChannel
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    // public function handle(object $event): void
    public function handle($event)
    {
        // create new channel for the user
        $event->user->channel()->create([
            'name' => $event->user->name
        ]);
    }
}
