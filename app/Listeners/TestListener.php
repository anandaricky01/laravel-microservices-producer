<?php

namespace App\Listeners;

use App\Events\TestEvent;
use App\Jobs\TestJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TestListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(TestEvent $event): void
    {
        TestJob::dispatch($event->count);
    }
}
