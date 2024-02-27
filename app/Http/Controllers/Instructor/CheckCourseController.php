<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
//Necesarios para envial el correo
use Illuminate\Support\Facades\Mail;
//Este lo he creado yo y está en la carpeta mail
use App\Mail\VerifiedCourse;
use App\Mail\DenyCourse;

class CheckCourseController extends Controller
{
    public function check(){

        $courses = Course::where('status', 2)
        ->where('user_id', auth()->user()->id)
        ->paginate();

        return view('instructor.validate.check', compact('courses'));
    }

    public function show(Course $course){
      
     // Este authorize verifica que el curso este primero en revisión, viene del policy CoursePolicy
       $this->authorize('revision', $course);

        return view('instructor.validate.show', compact('course'));
    }

    public function approved(Course $course){

        // Este authorize verifica que el curso este primero en revisión, viene del policy CoursePolicy
       $this->authorize('revision', $course);

        if(!$course->lessons || !$course->goals || !$course->requirements || !$course->image){
            return back()->with('info', 'No se puede publicar un curso incompleto');
        }
        $course->status = 3;
        $course->save();

        //Este método envia un correo electrónico cada vez que el estatus cambia a 3(aprovado)
        //Cuando tenga un grupo de profesores debo modificarlo para que se lo envíe al profesor que lo a creado.
        //Le paso la variable $course para que envíe la información del nombre del curso
        //y la recibo en el mailable VerifiedCourse en el método construct
        $mail = new VerifiedCourse($course);

        //Cambio el método send($mail) por el método queue($mail) para que utilice los queues y no relentice la web,
        //tambien en el archivo .env cambio de QUEUE_CONNECTION=sync a QUEUE_CONNECTION=database
        //el problema es que debo de ejecutar en la terminal el comando php artisan queue:work, o al subir el proyecto configurarlo para 
        //que esté a la escucha de queues, ver video: Desplegar tu proyecto laravel en Digital ocean de coders free
        Mail::to($course->teacher->email)->send($mail);


        return redirect()->route('instructor.courses.check')->with('info', 'El curso se a publicado');
    }

    //Método para las observaciones del curso
    public function remark(Course $course){

        return view('instructor.validate.remark', compact('course'));
    }

    //Método para rechazar el curso
    public function deny(Request $request, Course $course){

        $request->validate([
            'body' => 'required'
        ]);
        //accedo a la relación que está en Course y se relaciona con ObservationCourse
        //y le pido que cree un nuevo registro, con toda la información del formulario
        //poniendo dentro del create() $request->all()
            $course->observationCourse()->create($request->all());
        //ahora lo devuelvo al status 1
        $course->status = 1;
        $course->save();

        //Este método envia un correo electrónico cada vez que el estatus cambia a 1(rechazado)
        //Cuando tenga un grupo de profesores debo modificarlo para que se lo envíe al profesor que lo a creado.
        //Le paso la variable $course para que envíe la información del nombre del curso
        //y la recibo en el mailable DenyCourse en el método construct
        $mail = new DenyCourse($course);

        //Cambio el método send($mail) por el método queue($mail) para que utilice los queues y no relentice la web,
        //tambien en el archivo .env cambio de QUEUE_CONNECTION=sync a QUEUE_CONNECTION=database
        //el problema es que debo de ejecutar en la terminal el comando php artisan queue:work, o al subir el proyecto configurarlo para 
        //que esté a la escucha de queues, ver video: Desplegar tu proyecto laravel en Digital ocean de coders free
        Mail::to($course->teacher->email)->send($mail);

        return redirect()->route('instructor.courses.check')->with('infodeny', 'El curso se a rechazado');
    }
}
