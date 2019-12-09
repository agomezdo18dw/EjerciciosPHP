<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['nombre','titulo','fechainicio','fechafin','horasestimadas','empleado_id'];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}