<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckStudiesController extends Controller
{
    public function studies(){

        return view('instructor.validate.study');
    }
}
