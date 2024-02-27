<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'extract'];

    //dentro del parentesis le paso el modelo con el que quiero que se relacione(esta es otra manera de pasarlo), asi indico en este caso que un usuario puede tener muchos post(Blogpost)
    public function blogposts(){
        return $this->hasMany(Blogpost::class);
      }

    public function expelabor(){
        return $this->hasMany(Expelabor::class);
      }  

      public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
