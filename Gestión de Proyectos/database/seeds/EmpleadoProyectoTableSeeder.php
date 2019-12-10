<?php

use Illuminate\Database\Seeder;
use App\EmpleadoProyecto;

class EmpleadoProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EmpleadoProyecto::class,7)->create(); //Se le tiene que añadir: use App\EmpleadoProyecto
    }
}
