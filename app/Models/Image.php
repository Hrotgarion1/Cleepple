<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    //Relación polimórfica

    //El nombre de este método debe de ser el mismo que el nombre del campo, en este caso se llamaba el campo imagepostable_id
    //así que utilizo para el nombre del método imagepostable
    // public function imagepostable(){
    //     return $this->morphTo();
    // }
    //ahora debo de ir al modelo con el cual quiero relacionarlo

    public function imageable(){
        return $this->morphTo();
    }

    
}
