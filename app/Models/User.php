<?php

namespace App\Models;

use App\Notifications\CustomResetPasswordNotificacion;
use App\Notifications\CustomVerifyEmailNotificacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin', 'role_id', 'province_id', 'phone'
    ];

    // asignacion del rol de administrador

    public function getIsAdminAttribute()
    {
        return $this->role_id == 1;
    }

    // asignacion del rol de Centro
    
    public function getIsCentroAttribute()
    {
        return $this->role_id == 3;
    }

    // asignacion del rol de Empresa
    
    public function getIsEmpresaAttribute()
    {
        return $this->role_id == 4;
    }

    // asignacion del rol de Entidad
    
    public function getIsEntidadAttribute()
    {
        return $this->role_id == 5;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*Codigo traido de CanResetPassword en la ruta de vendor/laravel/Illuminate/Auth/Passwords/CanResetPAssword y esta probado y funciona, envia el mail del archivo CustomResetPasswordNotificacion*/

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotificacion($token));
    }

    /*Pruebo email de verificacion de MustVerifyEamil en la ruta vendor/laravel/Illuminate/Auth/MustVerifyEmail y esta probado y funciona, envia el mail del archivo CustomVerifyEmailNotificacion*/

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerifyEmailNotificacion);
    }

    

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /** Aqui ponemos la imagen que mostramos del usuario en la ui */
    public function adminlte_image(){
        return 'https://picsum.photos/300/00';
    }
 /** Aqui ponemos el rol del usuario */
    public function adminlte_desc(){
        return "";
    }
 /** Aqui ponemos el boton para ir al profile del usuario */
    public function adminlte_profile_url(){
        return 'dashboard';
    }
 //relacion uno a uno//

 public function profile(){
     return $this->hasOne(Profile::class);
 }

 public function address(){
    return $this->hasOne(Address::class);
  }

  public function organization(){
    return $this->hasOne(Organization::class);
  }

  public function link(){
    return $this->hasOne(Link::class);
  }

 //Relaciones uno a muchos

 public function courses_dictated(){
    return $this->hasMany(Course::class);
 }
 //dentro del parentesis le paso el modelo con el que quiero que se relacione, asi indico en este caso que un usuario puede tener muchos reviews(Review)
 public function reviews(){
    return $this->hasMany(Review::class);
 }

 public function comments(){
    return $this->hasMany(Comment::class);
 }

 public function reactions(){
    return $this->hasMany(Reaction::class);
 }
 //dentro del parentesis le paso el modelo con el que quiero que se relacione(esta es otra manera de pasarlo), asi indico en este caso que un usuario puede tener muchos post(Blogpost)
 public function blogposts(){
     return $this->hasMany(Blogpost::class);
 }
 //dentro del parentesis le paso el modelo con el que quiero que se relacione(esta es otra manera de pasarlo), asi indico en este caso que un usuario puede tener muchos estudios
 public function estudios(){
    return $this->hasMany(Estudio::class);
 }

 public function curriculo(){
    return $this->hasMany(Curriculo::class);
 }

 //Para el select dinamico para escoger pais y provincia
 public function province()
    {
        return $this->belongsTo(Province::class);
    }

 //Relaciones muchos a muchos

 public function courses_enrolled(){
     return $this->belongsToMany(Course::class);
 }

 public function lessons(){
    return $this->belongsToMany(Lesson::class);
 }
    
}



