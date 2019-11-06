<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validacionController extends Controller
{
    public function mostrarFormulario(){
        return view('4-4/validacion');
    }

    public function validacion(Request $request){

        $validatedData = $request->validate([
            'nombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'email' => 'required|email',
            'tel' => 'regex:/^[9|6|7][0-9]{8}$/'
        ]);
            
        return view('4-4/datos', );
    }
}
