<?php

namespace App\Jobs;

use App\Models\HelloWorld;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendHelloWorld implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $msg;
    /**
     * Create a new job instance.
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
        // $this->connection = 'msg:hello';
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
    }
}
