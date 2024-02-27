<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accisolid extends Model
{
    use HasFactory;

    protected $guarded =['id', 'status'];

    const PROPUESTO = 1;
    const REVISION = 2;
    const VERIFICADO = 3;
    const DENEGADO = 4;

    //Relación de muchos a muchos

    //aqui relaciono el modelo Blogpost en el que estoy con el modelo Tagpost en una relación de muchos a muchos
    //esta relación la utilizo en el seeder BlogpostSeeder
    
    public function refentity(){
        return $this->belongsToMany(Refentity::class);
    }

    //Relacion uno a uno polimorfica

    public function logro(){
        return $this->morphOne('App\Models\Logro', 'logroable');
    }

    //Relación de uno a muchos inversa

    //un usuario puede tener muchas accisolid
    public function curriculo(){
        return $this->belongsTo(Curriculo::class, 'curriculo_id');
    }
}
