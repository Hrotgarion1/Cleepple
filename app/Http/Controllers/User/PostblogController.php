<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogpost;
use App\Models\Categoriapost;
use App\Models\Typepost;
use App\Models\Province;
use App\Models\Profesion;
use App\Models\Especializacion;
//para las imagenes del blog
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\UserStorePostblogRequest;

class PostblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.postsblog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoriapost::pluck('name', 'id');
        $types = Typepost::pluck('name', 'id');
        $provinces = Province::pluck('name', 'id');
        $profesiones = Profesion::pluck('name', 'id');
        $especializaciones = Especializacion::pluck('name', 'id');
        
        return view('user.postsblog.create', compact('categories', 'types', 'provinces', 'profesiones', 'especializaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Le paso el request del user después de llamarlo arriba para que gestione las validaciones
    public function store(UserStorePostblogRequest $request)
    {
        $blogpost = Blogpost::create($request->all());
        
        //Este método es para pasar los achivos del form(imagenes concretamente)
        //le paso el nombre del input (file) dentro para que funcione el método file
        //este método requiere del facade Storage y lo llamo arriba
        //si existe un archivo file (ver video Subir imagenes al servidor-Aprende a crear un sistema de blog)
        if ($request->file('file')) {
            //lo mueve a la carpeta Storage/posts y lo almacena en la variable $url
            $url = Storage::put('posts', $request->file('file'));
            //$blogpost accede a la relacion imagepost() del modelo Blogpost
            $blogpost->image()->create([
                'url' => $url
            ]);
        }

            if($request->profesiones_id){
            $blogpost->profesion()->attach($request->profesiones_id);
            }

            if($request->especializaciones_id){
            $blogpost->especializacion()->attach($request->especializaciones_id);
            }

       return redirect()->route('user.postsblog.edit', $blogpost);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blogpost $postblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpost $postblog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpost $postblog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpost $postblog)
    {
        //
    }
}
