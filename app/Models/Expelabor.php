<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expelabor extends Model
{
    use HasFactory;

    protected $guarded =['id', 'status'];

    const PASADO = 1;
    const ACTUAL = 2;

    public function scopeCountry($query, $country_id){
        if($country_id){
            return $query->where('country_id', $country_id);
        }
    }

    public function scopeProvince($query, $province_id){
        if($province_id){
            return $query->where('province_id', $province_id);
        }
    }

    
//Relacion uno a muchos inversa

public function especializacion(){
    return $this->belongsTo(Especializacion::class);
}

public function province(){
    return $this->belongsTo(Province::class, 'province_id');
}

public function curriculo(){
    return $this->belongsTo(Curriculo::class);
}

public function cat_profe(){
    return $this->belongsTo(CategoriaProfesional::class, 'cat_prof_id');
}

public function jornada(){
    return $this->belongsTo(Jornada::class, 'jornada_id');
}

public function hora_extra(){
    return $this->belongsTo(HorasExtra::class, 'hora_extra_id');
}

//Relación de muchos a muchos

    //aqui relaciono el modelo Blogpost en el que estoy con el modelo Tagpost en una relación de muchos a muchos
    //esta relación la utilizo en el seeder BlogpostSeeder
    
    public function refelabor(){
        return $this->belongsToMany(Refelabor::class);
    }

    //Relacion uno a uno polimorfica

    public function logro(){
        return $this->morphOne('App\Models\Logro', 'logroable');
    }

}
