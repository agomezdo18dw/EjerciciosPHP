<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre','apellido','email','telefono','departamento_id'];
    
    public function proyecto()
    {
        return $this->hasOne(Proyecto::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}