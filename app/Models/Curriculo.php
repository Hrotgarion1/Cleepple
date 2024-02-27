<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $guarded =['id', 'status'];

    const ACTIVO = 1;
    const INACTIVO = 2;

    //relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function especializacion(){
        return $this->belongsTo(Especializacion::class);
    }

    //Relacion de uno a muchos

    public function study(){
        return $this->hasMany(Study::class);
    }

    public function expelabor(){
        return $this->hasMany(Expelabor::class);
    }

    public function capacidad(){
        return $this->hasMany(Capacidad::class);
    }

    public function autodidacta(){
        return $this->hasMany(Autodidacta::class);
    }

    public function accisolid(){
        return $this->hasMany(Accisolid::class);
    }

    public function expepyme(){
        return $this->hasMany(Expepyme::class);
    }
}
