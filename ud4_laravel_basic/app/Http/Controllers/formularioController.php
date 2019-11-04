<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class formularioController extends Controller
{
    public function mostrarForm(){
        return view('4-3/formulario');
    }

    public function mostrarDatos(Request $request){
        $nombre = $request -> input('nombre')." ".$request -> input('apellido');
        return view('4-2/saludoConNombre',['nombre'=>$nombre]);
    }

    public function mostrarFormIdiomas(){
        return view('4-3/formularioIdiomas');
    }

    public function mostrarDatos2(Request $request){
        $json = File::get('json/saludos.json');
        $saludos = json_decode($json);
        $nombre = $request -> input('nombre')." ".$request -> input('apellido');
        return view('4-3/formularioIdiomas',['saludos'=>$saludos,'nombre'=>$nombre]);
    }
}
