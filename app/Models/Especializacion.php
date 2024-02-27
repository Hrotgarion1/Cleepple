<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especializacion extends Model
{
    use HasFactory;

    protected $fillable = ['profesion_id','name', 'color', 'extract'];

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

    //una especializacion puede tener una profesion
    public function profesion(){
        return $this->belongsTo(Profesion::class, 'profesion_id');
    }

    //Relacion uno a muchos

    public function study(){
        return $this->hasMany(Study::class);
    }

    public function curriculo(){
        return $this->hasMany(Curriculo::class);
    }
}
