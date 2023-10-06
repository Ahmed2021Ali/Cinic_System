<?php

namespace App\Listeners;

use App\Mail\SendDoctorMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendDoctorNewBooking
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
    public function handle(object $event): void
    {
        Mail::to($event->booking->doctor->email)->send(new SendDoctorMail($event->booking));
    }
}
