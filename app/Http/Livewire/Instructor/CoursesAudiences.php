<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Audience;
use App\Models\Course;
use Livewire\Component;

class CoursesAudiences extends Component
{
    public $course, $audience, $name;

    protected $rules = [
        'audience.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->audience = new Audience();
    }

    public function render()
    {
        return view('livewire.instructor.courses-audiences');
    }

    public function edit(Audience $audience){
        $this->audience = $audience;
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->course->audiences()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }

    public function update(){
        // Valido los datos
        $this->validate();
        //Los guardo en la base de datos
        $this->audience->save();
        //Borro la info de la propiedad audience y le indico que es una nueva instancia
        $this->audience = new Audience();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Audience $audience){
        $audience->delete();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }
}
