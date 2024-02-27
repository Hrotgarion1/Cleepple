<?php

use App\Http\Controllers\Admin\CategorypostController;
use App\Http\Controllers\Admin\EspecializacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostblogController;
use App\Http\Controllers\Admin\ProfesionController;
use App\Http\Controllers\Admin\TypePostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryCourseController;
use App\Http\Controllers\Admin\LevelCourseController;
use App\Http\Controllers\Admin\PriceCourseController;


/*Rutas para el administrador*/
//Todas las rutas aquí nombradas por defecto tienen el nombre admin, así la por ejemplo la ruta categories para usarla debo escribir
//admin.categories y si quiero ir al index pondré admin.categories.index

Route::group(['middleware' => 'is_admin'], function () {

    //Rutas para la gestion de usuarios y los roles y hacen CRUDS
    //Proteger rutas de route resource con sus propios permisos de spatie,
    // requiere que el usuario tenga un rol de spatie, no solo el rol principal.
    Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');

      //Rutas para el blog que son del administrador y hacen CRUDS
    Route::resource('categoryblog', CategorypostController::class)->names('categories');
    Route::resource('profesion', ProfesionController::class)->names('profesiones');
    Route::resource('especializacion', EspecializacionController::class)->names('especializaciones');
    Route::resource('typepost', TypePostController::class)->names('typeposts');
    Route::resource('postblog', PostblogController::class)->names('postsblog');

    //Rutas para el centro de estudios que son del administrador y hacen CRUDS
    Route::resource('categorycourse', CategoryCourseController::class)->names('categorycourses');
    Route::resource('levelcourse', LevelCourseController::class)->names('levelcourses');
    Route::resource('pricecourse', PriceCourseController::class)->names('pricecourses');
    
});
