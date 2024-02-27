<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded =['id'];


    //Para el select dinamico para escoger pais y provincia
    public function province()
    {
       return $this->belongsTo(Province::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
