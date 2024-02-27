<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    //A diferencia de la propiedad fillable que pide los campos que quiero llenar
    //guarded pide los que quiero evitar que se llenen, es decir, que no se puede llenar el id etc.
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Query Scopes, estos metodos comprueban que las variables categoriapost_id y zonapost_id no esten vacias

    public function scopeCategoriapost($query, $categoriapost_id){
        if($categoriapost_id){
            return $query->where('categoriapost_id', $categoriapost_id);
        }
    }

    public function scopeTypepost($query, $typepost_id){
        if($typepost_id){
            return $query->where('typepost_id', $typepost_id);
        }
    }

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

    //Relación de uno a muchos inversa

    //un usuario puede tener muchos post(Blogpost)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //una categoria(categoriapost) puede tener muchos post(blogpost)
    public function categoriapost(){
        return $this->belongsTo(Categoriapost::class);
    }

    public function typepost(){
        return $this->belongsTo(Typepost::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    //Relación de muchos a muchos

    //aqui relaciono el modelo Blogpost en el que estoy con el modelo Tagpost en una relación de muchos a muchos
    //esta relación la utilizo en el seeder BlogpostSeeder
    
    public function profesion(){
        return $this->belongsToMany(Profesion::class);
    }
    
    public function especializacion(){
        return $this->belongsToMany(Especializacion::class);
    }

    //Relación uno a uno polimorfica
    //un post puede tener una imagen
    public function image(){
        //Entre los pararentesis debo pasarle en primer lugar el modelo y en segundo el nombre del método que definí en el modelo
        return $this->morphOne(Image::class, 'imageable');
    }
}
