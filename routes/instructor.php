<?php

use App\Http\Controllers\Instructor\CheckCourseController;
use App\Http\Controllers\Instructor\CheckStudiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use App\Http\Livewire\Instructor\CoursesStudents;

// Rutas privadas para que los centros de estudios puedan gestionar su sección
Route::group(['middleware' => 'is_centro'], function () {
    
    Route::get('courses.portada', function () { return view('instructor.courses.portada'); })->name('courses.portada');

    Route::get('courses.catalogo', function () { return view('instructor.courses.catalogo'); })->name('courses.catalogo');

    Route::get('courses.lista-instructor', function () { return view('instructor.courses.lista-instructor'); })->name('courses.lista-instructor');

    Route::get('courses.lista-alumno', function () { return view('instructor.courses.lista-alumno'); })->name('courses.lista-alumno');
    
    // Route::redirect('', 'instructor/courses');

    Route::resource('courses', CourseController::class)->names('courses');
    
    Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');
    
    Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');

    Route::get('courses/{course}/students', CoursesStudents::class)->name('courses.students');
     //Ruta para verificar los cursos
    Route::post('courses/{course}/status', [CourseController::class, 'status'])->name('courses.status');
     //Ruta para devolver el curso al status 2
    Route::post('courses/{course}/statusBack', [CourseController::class, 'statusBack'])->name('courses.statusBack');
     //Ruta para pausar la publicación del curso, status 4
     Route::post('courses/{course}/statusPaused', [CourseController::class, 'statusPaused'])->name('courses.statusPaused');

    Route::get('check', [CheckCourseController::class, 'check'])->name('courses.check');

    Route::get('studies', [CheckStudiesController::class, 'studies'])->name('courses.studies');

    Route::get('courses/{course}', [CheckCourseController::class, 'show'])->name('courses.show');
      //ruta para aprovar el curso
    Route::post('courses/{course}/approved', [CheckCourseController::class, 'approved'])->name('courses.approved');
      //Ruta para el formulario donde el profesor o el centro hace las observaciones antes de aprovar el curso
    Route::get('courses/{course}/remark', [CheckCourseController::class, 'remark'])->name('courses.remark');
      //Ruta para rechazar el curso
    Route::post('courses/{course}/deny', [CheckCourseController::class, 'deny'])->name('courses.deny');
    //Ruta para ver los cursos que tienen observaciones
    Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');

    
});



    

