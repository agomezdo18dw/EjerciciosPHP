<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo(){
        return view('saludo');
    }

    public function saludoConNombre($nombre, $apellido){
        return view('saludoConNombre', ['nombre'=>$nombre, 'apellido'=>$apellido]);
    }

    public function saludoColor($nombre, $color='ff0000'){
        return view('saludoColor', ['nombre'=>$nombre, 'color'=>$color]);
    }
}
