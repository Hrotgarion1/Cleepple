<?php

namespace App\Observers;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class SectionObserver
{
    public function deleting(Section $section){
        
        foreach ($section->lessons as $lesson) {
            if ($lesson->resource) {
                //Este codigo elimina el archivo de la carpeta resource
                Storage::delete($lesson->resource->url);
                //Elimina el registro de la base de datos
                $lesson->resource->delete();
            }
        }
    }
}
