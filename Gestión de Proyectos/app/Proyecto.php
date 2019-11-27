<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['nombre','titulo','fechainicio','fechafin','horasestimadas','empleadoRes'];

    public function empleado()
    {
        return $this->belongsTo('App\Empleado', 'empleadoRes');
    }
}