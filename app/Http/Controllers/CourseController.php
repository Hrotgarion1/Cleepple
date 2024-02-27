<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function catalogo(){
        return view('centro.catalogo');
    }

    public function show(Course $course){

      $this->authorize('published', $course);

      $similares = Course::where('category_id', $course->category_id)
      ->where('id', '!=', $course->id)
      ->where('status', 3)
      ->latest('id')
      ->take(5)
      ->get();

      return view('centro.show', compact('course', 'similares'));
    }

    public function enrolled(Course $course){
           $course->students()->attach(auth()->user()->id);

           return redirect()->route('centro.status', $course);
    }
}
