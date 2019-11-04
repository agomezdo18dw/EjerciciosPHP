<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function mostrarForm(){
        return view('formulario');
    }

    public function mostrarDatos(Request $request){
        $nombre = $request -> input('nombre');
        $apellido = $request -> input('apellido');
        return view('saludoConNombre',['nombre'=>$nombre,'apellido'=>$apellido]);
    }

    public function mostrarFormIdiomas(){
        return view('formularioIdiomas');
    }

    public function mostrarDatos2(Request $request){
        $nom = $nombre = $request -> input('nombre')." ".$apellido = $request -> input('apellido');
        return view('saludoIdiomas',['nombre'=>$nom]);
    }
}
