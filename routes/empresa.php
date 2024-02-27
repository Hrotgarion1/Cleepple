<?php

use App\Http\Controllers\Empresa\HomeController;
use Illuminate\Support\Facades\Route;



/*Rutas para las empresas*/

Route::group(['middleware' => 'is_empresa'], function () {

    Route::resource('company', HomeController::class)->names('companies');
});