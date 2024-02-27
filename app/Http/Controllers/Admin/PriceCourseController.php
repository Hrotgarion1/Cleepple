<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

class PriceCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricecourses = Price::all();

        return view('admin.pricecourse.index', compact('pricecourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pricecourse.create');
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
            'value' => 'required|numeric|unique:prices'
        ]);

        //le pido que me genere un nuevo registro de categoriapost con la información que le paso desde el formulario
        //esta información la almaceno en una variable a la que llamo $categiriapost
        $pricecourse = Price::create($request->all());
        //Y ahora le pido que me redireccione a una ruta y le paso el valor de $categoriapost
        return redirect()->route('admin.pricecourses.index', $pricecourse)->with('info', 'Precio del curso creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price $pricecourse)
    {
        return view('admin.categorycourse.show', compact('categorycourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $pricecourse)
    {
        return view('admin.pricecourse.edit', compact('pricecourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $pricecourse)
    {
        $request->validate([
            'name' => 'required',
            //si pongo único debo indicarle en que tabla debe de ser único
            'value' => 'required|numeric|unique:prices'
        ]);

        $pricecourse->update($request->all());

        return redirect()->route('admin.pricecourses.edit', $pricecourse)->with('info', 'Precio del curso actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $pricecourse)
    {
        $pricecourse->delete();

        return redirect()->route('admin.pricecourses.index')->with('info', 'Precio del curso eliminado con éxito');
    }
}
