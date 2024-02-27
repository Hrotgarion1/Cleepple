<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

//Clase importada para poder utilizar el policy para proteger las secciones de los cursos
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoursesStudents extends Component
{

    use WithPagination;

    use AuthorizesRequests;

    public $course, $search;

    public function mount(Course $course){
        $this->course = $course;

        //Proteger secciones con el policy CoursePolicy y el método dicatated y el objeto $course
       $this->authorize('dicatated', $course);
    }

    //Método para resetear la pagina mientras escribo en el buscador, es otra forma de hacerlo
    //utilizando el ciclo de livewire y no un método wire
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $students = $this->course->students()->where('name', 'LIKE', '%' . $this->search . '%')->paginate(4);

        return view('livewire.instructor.courses-students', compact('students'))->layout('layouts.instructor', ['course' => $this->course]);
    }
}
