<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //Verifica si un usuario se a matriculado en un curso
    public function enrolled(User $user, Course $course){
      return $course->students->contains($user->id);
    }

    //Verifica si el curso esta publicado
    public function published(?User $user, Course $course){
      if($course->status == 3){
        return true;
      }else{
        return false;
      }
    }

    //Este método verifica si el usuario que intenta modificar la información de un curso
    //es el usuario que lo a creado
    public function dicatated(User $user, Course $course){

      if($course->user_id == $user->id){
          return true;
      }else{
        return false;
      }
    }

    //Este método verifica que el status del curso que quiero aprovar sea 2(revisión) y de lo contrario
    //no me deja publicarlo, para que de este modo todos los cursos deban ser revisados
    public function revision(User $user, Course $course){
      if($course->status == 2){
        return true;
      }else{
        return false;
      }
    }

    //Este metodo impido que un usuario pueda hacer dos reviews a un mismo curso
    //fuente video 59 reseñas del curso desde el minuto 21

    public function valued(User $user, Course $course){
      //Este método comprueba si el usuario y el curso tienen una reseña en común
        if(Review::where('user_id', $user->id)->where('course_id', $course->id)->count()){
          return false;
        }else{
          return true;
        }
    }
}
