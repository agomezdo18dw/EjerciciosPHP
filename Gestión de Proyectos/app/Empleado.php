<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre','apellido','email','telefono'];
    
    public function proyecto()
    {
        return $this->hasOne(Proyecto::class);
    }
}