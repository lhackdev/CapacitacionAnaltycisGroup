<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;

class SendMailController extends Controller
{
    /**
     * Funcion para enviar correos
     *
     * @return void
     */
    public function sendMail(){

        $data = [
            'correo' => 'luisyesidpenaflorian@gmail.com',
            'nombre' => 'Ing. Daniel León',
            'mensaje' =>  'Bienvenido, este es un mensaje desde Laravel usando Mailable y Eventos de manera asíncrona',
        ];

        /**
         * Disparo evento para enviar correo
         */
        event(new UserNotification((object) $data, 'emails.templateMail', 'Bienvenido'));
    }
}
