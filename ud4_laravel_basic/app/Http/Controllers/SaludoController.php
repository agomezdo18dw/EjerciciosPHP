<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo(){
        return view('4-2/saludo');
    }

    public function saludoConNombre($nombre){
        return view('4-2/saludoConNombre', ['nombre'=>$nombre]);
    }

    public function saludoColor($nombre, $color='ff0000'){
        return view('4-2/saludoColor', ['nombre'=>$nombre, 'color'=>$color]);
    }
}
