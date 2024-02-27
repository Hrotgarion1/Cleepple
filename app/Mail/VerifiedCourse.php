<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//Llamo al modelo course para pasr el nombre del curso
use App\Models\Course;

class VerifiedCourse extends Mailable
{
    use Queueable, SerializesModels;

    //Propiedad para utilizarla en la vista
    public $course;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //Recibo la variable que envío desde CheckCourseController ($course) y le digo que es una instancia del modelo Course
    public function __construct(Course $course)
    {
        //Accedo a la propiedad y le asigno el valor del objeto, y ahora lo recibo en la vista verified-course.blade.php
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Dentro del método subject le paso el asunto del mail, el que aparecerá en la bandeja
        return $this->view('emails.verified-course')->subject('Curso aprovado');
    }
}
