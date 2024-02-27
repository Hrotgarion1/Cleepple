<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Modelo de categorias para el blog, también existe otro modelo llamado category, ese es de los courses
use App\Models\Categoriapost;


class CategorypostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryblogs = Categoriapost::all();

        return view('admin.categories.index', compact('categoryblogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'slug' => 'required|unique:categoriaposts'
        ]);

        //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $categoriapost = Categoriapost::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.categories.index', $categoriapost)->with('info', 'Categoría creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$categoryblog es la variable que viene de las rutas admin
    public function show(Categoriapost $categoryblog)
    {
        return view('admin.categories.show', compact('categoryblog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$categoryblog es la variable que viene de las rutas admin
    public function edit(Categoriapost $categoryblog)
    {
        return view('admin.categories.edit', compact('categoryblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$categoryblog es la variable que viene de las rutas admin
    public function update(Request $request, Categoriapost $categoryblog)
    {
        $request->validate([
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único y en este caso
            //también quiero que me reconozca un slug ya utilizado de otro id y sin embargo que me deje 
            //pasar el mismo slug (id) que estoy actualizado sin darme error.
            'slug' => "required|unique:categoriaposts,slug,$categoryblog->id"
        ]);

        $categoryblog->update($request->all());

        return redirect()->route('admin.categories.edit', $categoryblog)->with('info', 'Categoría actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$categoryblog es la variable que viene de las rutas admin
    public function destroy(Categoriapost $categoryblog)
    {
        $categoryblog->delete();

        return redirect()->route('admin.categories.index')->with('info', 'Categoría eliminada con éxito');
    }
}
