<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Centro\HomeController;
use App\Http\Controllers\CourseController;

// Rutas públicas que muestran la portada, el catalogo y los cursos para que se puedan apuntar los distintos usuarios
Route::get('', [HomeController::class, 'index'])->name('centro');

Route::get('catálogo', [CourseController::class, 'catalogo'])->name('centro.catalogo');

Route::get('cursos/{course}', [CourseController::class, 'show'])->name('centro.show');

