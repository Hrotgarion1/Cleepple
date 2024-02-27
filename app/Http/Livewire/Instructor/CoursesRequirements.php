<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\Course;
use App\Models\Requirement;

class CoursesRequirements extends Component
{
    public $course, $requirement, $name;

    protected $rules = [
        'requirement.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->requirement = new Requirement();
    }
    public function render()
    {
        return view('livewire.instructor.courses-requirements');
    }

    public function edit(Requirement $requirement){
        $this->requirement = $requirement;
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->course->requirements()->create([
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
        $this->requirement->save();
        //Borro la info de la propiedad goal y le indico que es una nueva instancia
        $this->requirement = new Requirement();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Requirement $requirement){
        $requirement->delete();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }
}
