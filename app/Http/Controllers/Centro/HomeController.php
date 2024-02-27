<?php

namespace App\Http\Controllers\Centro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){

      $courses = Course::where('status', '3')->latest('id')->get()->take(12);
        return view('centro.index', compact('courses'));
          
      }
}
