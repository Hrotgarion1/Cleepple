<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded =['id', 'status'];

    protected $withCount = ['students', 'reviews'];



    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    const PAUSADO = 4;

    public function getRatingAttribute(){

        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);
        }else{
            return 5;
        }

        
    }

    //Query Scopes, estos metodos comprueban que las variables category_id y level_id no esten vacias

    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if($level_id){
            return $query->where('level_id', $level_id);
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion uno a uno

    public function observationCourse(){
        return $this->hasOne(ObservationCourse::class);
    }

    //Relacion uno a muchos

    public function reviews(){
        return $this->hasMany('App\Models\Review');
     }

     public function requirements(){
        return $this->hasMany('App\Models\Requirement');
     }

     public function goals(){
        return $this->hasMany('App\Models\Goal');
     }

     public function audiences(){
        return $this->hasMany('App\Models\Audience');
     }

     public function sections(){
        return $this->hasMany('App\Models\Section');
     }

    //Relacion uno a muchos inversa
     //Da nombre al centro
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    public function especializacion(){
        return $this->belongsTo(Especializacion::class);
    }

    //Relacion muchos a muchos

    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
