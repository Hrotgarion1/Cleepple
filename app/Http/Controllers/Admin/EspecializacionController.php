<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Especializacion;

class EspecializacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especializaciones = Especializacion::all();

        return view('admin.especializaciones.index', compact('especializaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'orange' => 'Color naranja',
            'pink' => 'Color rosa',
            'purple' => 'Color púrpura'
        ];

        return view('admin.especializaciones.create', compact('colors'));
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
            //si pongo único debo indicarle en que tabla debe de ser único, de momento lo he eliminado de la tabla
            // 'slug' => 'required|unique:tagposts',
            'color' => 'required',
            'profesion_id' => 'required',
            'extract' => 'required'
        ]);

        //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $especializacion = Especializacion::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.especializaciones.index', compact('especializacion'))->with('info', 'Especialización creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Especializacion $especializacion)
    {
        return view('admin.especializaciones.show', compact('especializacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Especializacion $especializacion)
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'orange' => 'Color naranja',
            'pink' => 'Color rosa',
            'purple' => 'Color púrpura'
        ];

        return view('admin.especializaciones.edit', compact('especializacion', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especializacion $especializacion)
    {
        $request->validate([
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único y en este caso
            //también quiero que me reconozca un slug ya utilizado de otro id y sin embargo que me deje 
            //pasar el mismo slug (id) que estoy actualizado sin darme error, ojo que aquí las comillas son dobles.
            // 'slug' => "required|unique:especializacions,slug,$especializacion->id",
            'profesion_id' => 'required',
            'color' => 'required',
            'extract' => 'required',
        ]);

        $especializacion->update($request->all());

        return redirect()->route('admin.especializaciones.edit', $especializacion)->with('info', 'Especialización actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especializacion $especializacion)
    {
        $especializacion->delete();

        return redirect()->route('admin.especializaciones.index')->with('info', 'Especialización eliminada con éxito');
    }
}
