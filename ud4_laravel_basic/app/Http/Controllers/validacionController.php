<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

class validacionController extends Controller
{
    public function mostrarFormulario(){
        return view('4-4/validacion');
    }

    public function validacion(Request $request){

        $request->validate([
            'nombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'email' => 'required|email',
            'tel' => 'regex:/^[679][0-9]{8}$/'
        ]);
            
        return view('4-4/datos')->with('nombre',$request->input('nombre'))->
                                with('apellido',$request->input('apellido'))->
                                with('email',$request->input('email'))->
                                with('tel',$request->input('tel'));
    }

    public function mostrarFormulario2(){
        return view('4-4/validacion2');
    }

    public function validacion2(ContactoRequest $request){
        return view('4-4/datos2')->with('nombre',$request->input('nombre'))->
                                with('apellido',$request->input('apellido'))->
                                with('email',$request->input('email'))->
                                with('tel',$request->input('tel'));
    }
}
