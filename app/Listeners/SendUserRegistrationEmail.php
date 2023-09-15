<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\User;
use App\Mail\MailableName;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendUserRegistrationEmail
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
    public function handle(UserRegistered $event): void
    {
        User::create([
            'name' => 'cika',
            'email' => 'cikacika@gmail.com',
        ]);
    }
}
