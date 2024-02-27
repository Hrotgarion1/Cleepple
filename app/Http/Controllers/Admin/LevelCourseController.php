<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Level;

class LevelCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levelcourses = Level::all();

        return view('admin.levelcourse.index', compact('levelcourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.levelcourse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:levels',
        ]);

         //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $levelcourse = Level::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.levelcourses.index', $levelcourse)->with('info', 'Nivel del curso creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Level $levelcourse)
    {
        return view('admin.levelcourse.show', compact('levelcourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $levelcourse)
    {
        return view('admin.levelcourse.edit', compact('levelcourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $levelcourse)
    {
        $request->validate([
            'name' => 'required|unique:levels,name' .$levelcourse->id
        ]);

        $levelcourse->update($request->all());

        return redirect()->route('admin.levelcourses.edit', $levelcourse)->with('info', 'Nivel del curso actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $levelcourse)
    {
        $levelcourse->delete();

        return redirect()->route('admin.levelcourses.index')->with('info', 'Nivel del curso eliminado con éxito');
    }
}
