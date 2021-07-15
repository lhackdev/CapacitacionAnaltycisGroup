<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data; //Datos para el envio
    public $vista; //Vista para enviar el correo
    public $asunto; //Asunto del correo
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data = null, $vista, $asunto)
    {
        $this->data = $data;
        $this->vista = $vista;
        $this->asunto = $asunto;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
