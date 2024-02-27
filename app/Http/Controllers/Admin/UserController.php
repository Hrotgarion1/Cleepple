<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //Proteger rutas de route resource con sus propios permisos de spatie,
    // requiere que el usuario tenga un rol de spatie, no solo el rol principal.
    public function __construct()
    {
        $this->middleware('can:Leer usuarios')->only('index');
        $this->middleware('can:Editar usuarios')->only('edit', 'update');
    }

    public function index()
    {
        $roles = Role::all();

        return view('admin.users.index', compact('roles'));
    }

    public function edit(User $user)
    { 
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        // return $request->all();
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user)->with('info', 'Rol asignado correctamente');
    }
}
