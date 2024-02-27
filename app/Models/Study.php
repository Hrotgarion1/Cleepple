<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Study extends Model
{
    use HasFactory;

    //Este modelo está pensado para los cursos realizados de forma presencial, admiten logros
    //y son seguidos por los profesores en todo momento.

    protected $fillable = ['centro', 'curso', 'status', 'fechaIni', 'fechaFin', 'category_id', 'user_id', 'curriculo_id'];

    const PROPUESTO = 1;
    const REVISION = 2;
    const VERIFICADO = 3;
    const DENEGADO = 4;

    //Metodo para escoger los estudios por curriculo_id
    protected static function booted()
    {
        if (auth()->check() && !auth()->user()->is_admin) {
        static::addGlobalScope('curriculo', function (Builder $builder) {
            $builder->where('curriculo_id', auth()->id());
        });
     }
    }

    //Relación de uno a muchos inversa

    //un usuario puede tener muchos estudios
    public function curriculo(){
        return $this->belongsTo(Curriculo::class, 'curriculo_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

     //Relación de muchos a muchos

    public function especializacion(){
        return $this->belongsTo(Especializacion::class);
    }

    //Relacion uno a uno polimorfica

    public function logro(){
        return $this->morphOne('App\Models\Logro', 'logroable');
    }
}
