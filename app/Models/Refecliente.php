<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refecliente extends Model
{
    use HasFactory;

    protected $fillable = ['review', 'rating'];

    //Relación de muchos a muchos

    //Aqui relaciono este modelo con el modelo Blogpost
    public function expepyme(){
        return $this->belongsToMany(Expepyme::class);
    }
}
