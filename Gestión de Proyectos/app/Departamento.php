<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['nombre', 'empleado_id'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    public function jefe()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
