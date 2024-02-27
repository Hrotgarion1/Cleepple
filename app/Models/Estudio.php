<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Estudio extends Model
{
    use HasFactory;

    protected $fillable = ['centro', 'curso', 'status', 'fechaIni', 'fechaFin', 'category_id', 'user_id'];

    const PROPUESTO = 1;
    const REVISION = 2;
    const VERIFICADO = 3;
    const DENEGADO = 4;

    
    //Metodo para escoger los estudios por user_id
    protected static function booted()
    {
        if (auth()->check() && !auth()->user()->is_admin) {
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', auth()->id());
        });
    }
    }

    //Relación de uno a muchos inversa

    //un usuario puede tener muchos estudios
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function profesion_curriculo(){
        return $this->belongsTo(ProfesionCurriculo::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

     //Relación de muchos a muchos

    public function profesion(){
        return $this->belongsToMany(Profesion::class);
    }

    public function especializacion(){
        return $this->belongsToMany(Especializacion::class);
    }

}
