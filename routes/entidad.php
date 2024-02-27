<?php

use App\Http\Controllers\Entidad\HomeController;
use Illuminate\Support\Facades\Route;


/*Rutas para las Entidades Sociales*/


Route::group(['middleware' => 'is_entidad'], function () {
    
    Route::resource('entidad', HomeController::class)->names('entidades');
});