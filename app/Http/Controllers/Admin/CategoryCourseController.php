<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorycourses = Category::all();

        return view('admin.categorycourse.index', compact('categorycourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorycourse.create');
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
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único
            'value' => 'required|unique:categories'
        ]);

        //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $categorycourse = Category::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.categorycourses.index', $categorycourse)->with('info', 'Categoría del curso creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categorycourse)
    {
        return view('admin.categorycourse.show', compact('categorycourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categorycourse)
    {
        return view('admin.categorycourse.edit', compact('categorycourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categorycourse)
    {
        $request->validate([
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único y en este caso
            //también quiero que me reconozca un slug ya utilizado de otro id y sin embargo que me deje 
            //pasar el mismo slug (id) que estoy actualizado sin darme error.
            'value' => "required|unique:categories,value,$categorycourse->id"
        ]);

        $categorycourse->update($request->all());

        return redirect()->route('admin.categorycourses.edit', $categorycourse)->with('info', 'Categoría del curso actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categorycourse)
    {
        $categorycourse->delete();

        return redirect()->route('admin.categorycourses.index')->with('info', 'Categoría del curso eliminada con éxito');
    }
}
