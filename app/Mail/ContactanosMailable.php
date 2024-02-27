<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    /*Aqui creo las partes que se envian del correo*/

    public $subject = "Informacion de contacto";

    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*Aqui le indico la pagina que voy a utilizar de patron, si no existe la creo, en "views" creo la carpeta emails y dentro pongo un archivo, en este caso lo llamo "contactanos"*/
        return $this->view('emails.contactanos');
    }
}
