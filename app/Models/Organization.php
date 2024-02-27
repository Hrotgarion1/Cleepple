<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    //Para el select dinamico para escoger pais y provincia
    public function province()
    {
       return $this->belongsTo(Province::class);
    }

    //Para el select dinamico para escoger profesion y especialización
    public function especializacion()
    {
       return $this->belongsTo(Especializacion::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function empleado()
    {
       return $this->belongsTo(Empleado::class);
    }
}
