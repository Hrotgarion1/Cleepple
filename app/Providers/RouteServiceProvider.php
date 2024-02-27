<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web', 'auth')
                ->name('admin.')
                ->prefix('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            Route::middleware('web', 'auth')
                
                ->prefix('centro')
                ->namespace($this->namespace)
                ->group(base_path('routes/centro.php'));

            Route::middleware('web', 'auth')
                ->name('empresa.')
                ->prefix('empresa')
                ->namespace($this->namespace)
                ->group(base_path('routes/empresa.php'));

            Route::middleware('web', 'auth')
                ->name('entidad.')
                ->prefix('entidad')
                ->namespace($this->namespace)
                ->group(base_path('routes/entidad.php'));

            Route::middleware('web', 'auth')
                ->name('instructor.')
                ->prefix('instructor')
                ->namespace($this->namespace)
                ->group(base_path('routes/instructor.php'));

            Route::middleware('web', 'auth')
                ->name('encargado.')
                ->prefix('encargado')
                ->namespace($this->namespace)
                ->group(base_path('routes/encargado.php'));
                
            Route::middleware('web', 'auth')
                ->name('delegado.')
                ->prefix('delegado')
                ->namespace($this->namespace)
                ->group(base_path('routes/delegado.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
