<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Proyecto::class,4)->create(); //Se le tiene que añadir: use App\Empleado

        /*----Seeders viejos----*/

        // DB::table('proyectos')->insert([
        //     'nombre' => 'Esturi',
        //     'titulo' => 'Est',
        //     'fechainicio' => '2019-12-10',
        //     'fechafin' => '2019-12-20',
        //     'horasestimadas' => '50',
        //     'empleadoRes' => '1'
        // ]);
        // DB::table('proyectos')->insert([
        //     'nombre' => 'SpaceX',
        //     'titulo' => 'XLion',
        //     'fechainicio' => '2019-7-3',
        //     'fechafin' => '2019-10-15',
        //     'horasestimadas' => '300',
        //     'empleadoRes' => '2'
        // ]);
        // DB::table('proyectos')->insert([
        //     'nombre' => 'Android50',
        //     'titulo' => 'Tree',
        //     'fechainicio' => '2019-9-1',
        //     'fechafin' => '2030-4-1',
        //     'horasestimadas' => '3000',
        //     'empleadoRes' => '3'
        // ]);
        // DB::table('proyectos')->insert([
        //     'nombre' => 'IOS40',
        //     'titulo' => 'GoldFish',
        //     'fechainicio' => '2020-1-2',
        //     'fechafin' => '2030-7-1',
        //     'horasestimadas' => '3000',
        //     'empleadoRes' => '4'
        // ]);

        /*--Fin Seeders viejos--*/
    }
}
