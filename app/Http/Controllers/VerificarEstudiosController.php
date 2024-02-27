<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VerificarEstudiosMailable;
use Illuminate\Support\Facades\Mail;



class VerificarEstudiosController extends Controller
{
   public function index(){

    return view('livewire.estudios.verificateEstud');

   }

   public function store(Request $request){

      $this->validate($request, [
         'email' => 'required|email'
      ]);

      $correo = array(
            'centro' => $request->input('centro'),
            'curso' => $request->input('curso'),
            'especializacion' => $request->input('especializacion'),
            'categoria' => $request->input('categoria'),
            'fechaIni' => $request->input('fechaIni'),
            'fechaFin' => $request->input('fechaFin'),

      );

      $email = $request->input('email');


    /*$correo = new VerificarEstudiosMailable($request->all());*/

    Mail::to($email)->send(new VerificarEstudiosMailable($correo));

    return redirect()->route('curriculo')->with('infoveri', 'Solicitud de verificación de estudios enviada correctamente');
   }

   
}
