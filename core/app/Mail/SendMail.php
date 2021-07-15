<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $vista;
    protected $asunto;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vista, $asunto, $data)
    {
        $this->vista = $vista;
        $this->asunto = $asunto;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown($this->vista)
        ->from('luis.pena.analyticsgroup@gmail.com', 'Luis Analytics Group')
        ->subject($this->asunto);
    }
}
