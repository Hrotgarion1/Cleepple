<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class LessonResources extends Component
{
    use WithFileUploads;

    public $lesson, $file;

    public function mount(Lesson $lesson){
        $this->lesson = $lesson;
    }

    public function render()
    {
        return view('livewire.instructor.lesson-resources');
    }

    public function save(){
        $this->validate([
            'file' => 'required'
        ]);
        // Metodo para que los archivos seleccionados se guarden en la carpeta que yo quiera y no en la temporal
        //en este caso en la carpeta resources ($this->file->store('resources');), despues le añado la variable $url para que se almacene ahí.
       $url = $this->file->store('resources');
       //Metodo para agregar un nuevo registro en la tabla resources y relacionarlo con la propiedad $lesson
       $this->lesson->resource()->create([
           'url' => $url
       ]);
       //Metodo para actualizar la propiedad lesson
       $this->lesson = Lesson::find($this->lesson->id);
    }

    public function download(){
        //Metodo para descargar un recurso, llamo al metodo storage_path para que me devuelva la ruta C/Xampp/cleepple/storage y desde ahi continuo.
        //despues le pido el recurso con 'app/public/' . $this->lesson->resource->url
        return response()->download(storage_path('app/public/' . $this->lesson->resource->url));
    }

    public function destroy(){
        //Este metodo eliminara el archivo de la carpeta resource
        Storage::delete($this->lesson->resource->url);
        //Este metodo elimará la información d ela base de datos
        $this->lesson->resource->delete();
        //Metodo para refrescar la info
        $this->lesson = Lesson::find($this->lesson->id);
    }
}
