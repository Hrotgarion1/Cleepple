<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Goal;
use Livewire\Component;

class CoursesGoals extends Component
{
    public $course, $goal, $name;

    protected $rules = [
        'goal.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->goal = new Goal();
    }

    public function render()
    {
        return view('livewire.instructor.courses-goals');
    }

    public function edit(Goal $goal){
        $this->goal = $goal;
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        $this->course->goals()->create([
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
        $this->goal->save();
        //Borro la info de la propiedad goal y le indico que es una nueva instancia
        $this->goal = new Goal();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Goal $goal){
        $goal->delete();
        //Actualizo in info del curso
        $this->course = Course::find($this->course->id);
    }
}
