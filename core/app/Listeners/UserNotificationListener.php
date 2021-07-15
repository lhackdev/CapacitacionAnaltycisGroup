<?php

namespace App\Listeners;

use App\Events\UserNotification;
use App\Mail\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserNotificationListener implements ShouldQueue
{
    // use InteractsWithQueue;

    /**
     * La cantidad máxima de RAM que puede consumir el job.
     * @var [int]
     */
    // public $memory;

    /**
     * 	La cantidad máxima de veces que se puede intentar un job.
     * @var [int]
     */
    // public $tries;

    /**
     * El número de segundos antes de que esté disponible un job liberado.
     * @var [int]
     */
    // public $delay;


    /**
     * El número de segundos de espera entre sondeos de la cola.
     *
     * @var [int]
     */
    // public $sleep;


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
     * @param  UserNotification  $event
     * @return void
     */
    public function handle(UserNotification $event)
    {
        //Ejecuto la clase que me envía el correo
        Mail::to($event->data->correo)
        ->send(new SendMail($event->vista, $event->asunto, $event->data));
    }
}
