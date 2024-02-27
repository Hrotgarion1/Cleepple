<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expepyme extends Model
{
    use HasFactory;

    protected $guarded =['id', 'status'];

    const PASADO = 1;
    const ACTUAL = 2;

    //Relacion uno a muchos inversa

public function especializacion(){
    return $this->belongsTo(Especializacion::class);
}

public function curriculo(){
    return $this->belongsTo(Curriculo::class);
}

public function empleado(){
    return $this->belongsTo(CategoriaProfesional::class);
}

public function jornada(){
    return $this->belongsTo(Jornada::class);
}

public function hora_extra(){
    return $this->belongsTo(HorasExtra::class);
}

//Relación de muchos a muchos

    //aqui relaciono el modelo Blogpost en el que estoy con el modelo Tagpost en una relación de muchos a muchos
    //esta relación la utilizo en el seeder BlogpostSeeder
    
    public function refecliente(){
        return $this->belongsToMany(Refecliente::class);
    }

    //Relacion uno a uno polimorfica

    public function logro(){
        return $this->morphOne('App\Models\Logro', 'logroable');
    }
}
