<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Lesson;
use App\Observers\LessonObserver;
use App\Observers\SectionObserver;
use App\Models\Section;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    // Declarado arriba en use y activado aqui el observer
        Lesson::observe(LessonObserver::class);
        Section::observe(SectionObserver::class);

        // Nueva directiva de Blade de nombre routeIs
        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)): ?>";
        });
    }
}
