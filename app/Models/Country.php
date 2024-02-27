<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'extract'];

    //dentro del parentesis le paso el modelo con el que quiero que se relacione(esta es otra manera de pasarlo), asi indico en este caso que un usuario puede tener muchos post(Blogpost)
    public function blogposts(){
        return $this->hasMany(Blogpost::class);
      }

      //Para hacer el select dinamico con province para el user
      public function provinces()
    {
        return $this->hasMany(Province::class, 'country_id');
    }
}
