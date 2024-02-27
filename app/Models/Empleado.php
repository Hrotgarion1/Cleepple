<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function organization()
    {
       return $this->hasMany(Organization::class);
    }
}


