<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesion;

class ProfesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesiones = Profesion::all();

        return view('admin.profesiones.index', compact('profesiones'));
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

        return view('admin.profesiones.create', compact('colors'));
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
            'slug' => 'required|unique:tagposts',
            'color' => 'required',
            'extract' => 'required'
        ]);

        //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $profesion = Profesion::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.profesiones.index', compact('profesion'))->with('info', 'Profesión creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profesion $profesion)
    {
        return view('admin.profesiones.show', compact('profesion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesion $profesion)
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

        return view('admin.profesiones.edit', compact('profesion', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesion $profesion)
    {
        $request->validate([
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único y en este caso
            //también quiero que me reconozca un slug ya utilizado de otro id y sin embargo que me deje 
            //pasar el mismo slug (id) que estoy actualizado sin darme error, ojo que aquí las comillas son dobles.
            'slug' => "required|unique:profesions,slug,$profesion->id",
            'color' => 'required',
            'extract' => 'required',
        ]);

        $profesion->update($request->all());

        return redirect()->route('admin.profesiones.edit', $profesion)->with('info', 'Profesión actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesion $profesion)
    {
        $profesion->delete();

        return redirect()->route('admin.profesiones.index')->with('info', 'Profesión eliminada con éxito');
    }
}
