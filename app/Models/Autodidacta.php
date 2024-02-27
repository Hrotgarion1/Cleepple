<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autodidacta extends Model
{
    use HasFactory;

    //Este modelo está pensado para cuando un usuario realiza cursos online, las verificaciones dependen 
    //como siempre del centro que publica los videos online, y estos centros son los que deben de poner el 
    //valor en eps de estos cursos. Estos eps pasan al usuario al finalizar el curso y no admiten logros de momento.
    //Contienen url y iframe para que el estudiante pueda subir el video que a cursado, pero si el video no pertenece a
    //un centro registrado con nosotros no podrá ser verificado.
    protected $guarded = ['id'];

    const PROPUESTO = 1;
    const REVISION = 2;
    const VERIFICADO = 3;
    const DENEGADO = 4;

    //Relación de uno a muchos inversa

    //un usuario puede tener muchos autodidacta
    public function curriculo(){
        return $this->belongsTo(Curriculo::class, 'curriculo_id');
    }
}
