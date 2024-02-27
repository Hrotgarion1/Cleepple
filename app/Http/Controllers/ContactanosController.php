<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){

        return view ('components.ayuda');

    }

    public function store(Request $request){

        $correo = new ContactanosMailable($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'mensaje' => 'required',
        ]);

        Mail::to('atencionalcliente@cleepple.com')->send($correo);
    
        return redirect()->route('profile.show')->with('info', 'Mensaje enviado');
    }
}
