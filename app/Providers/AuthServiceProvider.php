<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('acceso_organizacion', function ($user) {
            return $user->is_admin || $user->is_centro || $user->is_empresa || $user->is_entidad;
        });

        Gate::define('acceso_centroEstudios', function ($user) {
            return $user->is_admin || $user->is_centro;
        });

        Gate::define('acceso_empresarios', function ($user) {
           return $user->is_admin || $user->is_empresa;
        });
        
        Gate::define('acceso_entidades', function ($user) {
           return $user->is_admin || $user->is_entidad;
        });

        Gate::define('acceso_admin', function ($user) {
            return $user->is_admin;
        });

        Gate::define('acceso_centro', function ($user) {
             return $user->is_centro;
        });

        Gate::define('acceso_empresa', function ($user) {
            return $user->is_empresa;
        });

       Gate::define('acceso_entidad', function ($user) {
        return $user->is_entidad;
       });

       

    

    }
}
