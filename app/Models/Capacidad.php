<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacidad extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const PROPUESTO = 1;
    const REVISION = 2;
    const VERIFICADO = 3;
    const DENEGADO = 4;

    //Relacion uno a uno polimorfica

    public function logro(){
        return $this->morphOne('App\Models\Logro', 'logroable');
    }

    //Relación de uno a muchos inversa

    //un usuario puede tener muchas capacidades
    public function curriculo(){
        return $this->belongsTo(Curriculo::class, 'curriculo_id');
    }
}
