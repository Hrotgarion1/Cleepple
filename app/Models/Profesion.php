<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color', 'extract'];

    protected $guarded =['id'];

    //método para que la url en lugar de mostrar el id de la categoría muestre el slug
    // public function getRouteKeyName()
    // {
    //   return "slug";
    // }

    //Relación de muchos a muchos

    //Aqui relaciono este modelo con el modelo Blogpost
    public function blogposts(){
        return $this->belongsToMany(Blogpost::class);
    }

    public function estudios(){
      return $this->belongsToMany(Estudio::class);
    }

    //dentro del parentesis le paso el modelo con el que quiero que se relacione(esta es otra manera de pasarlo), asi indico en este caso que una profesion puede tener muchas especializaciones
     public function especializacion(){
        return $this->hasMany(Especializacion::class, 'profesion_id');
    }

    //Relacion uno a muchos

    public function exp_labor(){
      return $this->hasMany(ExperienciaLaboral::class);
  }
}
