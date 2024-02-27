<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchersController extends Controller
{
    public function searchCenter()
    {
        return view('search.center');
    }

    public function searchCompany()
    {
        return view('search.company');
    }

    public function searchEntity()
    {
        return view('search.entity');
    }
}
