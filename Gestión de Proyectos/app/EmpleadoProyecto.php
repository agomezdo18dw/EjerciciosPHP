<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoProyecto extends Model
{
    protected $table = 'empleado_proyecto';
    protected $fillable = ['empleado_id','proyecto_id'];
}
