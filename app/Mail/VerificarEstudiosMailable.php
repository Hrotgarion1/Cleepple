<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificarEstudiosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Verificación de curso realizado";

    public $estudio;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($estudio)
    {
        $this->estudio = $estudio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       /* $estudios = Estudio::all();*/
        return $this->view('emails.verificar-estudios');
    }
}
