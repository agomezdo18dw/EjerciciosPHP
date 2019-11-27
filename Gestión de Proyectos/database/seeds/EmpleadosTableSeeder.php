<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /*----Seeders viejos----*/

        // DB::table('empleados')->insert([
        //  'nombre' => 'Aitor',
        //  'apellido' => 'Gomez',
        //  'email' => 'aitorgomez@gmail.com',
        //  'telefono' => '611111111'
        //  ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Unai',
        //     'apellido' => 'Perez',
        //     'email' => 'unaipe@gmail.com',
        //     'telefono' => '622222222'
        // ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Alex',
        //     'apellido' => 'Fernandez',
        //     'email' => 'alexitoh69fernandez@gmail.com',
        //     'telefono' => '633333333'
        // ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Brais',
        //     'apellido' => 'Gonzalez',
        //     'email' => 'tuhbraisxuloh@gmail.com',
        //     'telefono' => '644444444'
        // ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Steve',
        //     'apellido' => 'Jobs',
        //     'email' => 'Eljodidoestivenjobs@gmail.com',
        //     'telefono' => '655555555'
        // ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Bill',
        //     'apellido' => 'Gates',
        //     'email' => 'Billyrexulongates@gmail.com',
        //     'telefono' => '666666666'
        // ]);
        // DB::table('empleados')->insert([
        //     'nombre' => 'Lil',
        //     'apellido' => 'Skies',
        //     'email' => 'niggicreeping@gmail.com',
        //     'telefono' => '677777777'
        // ]);

        /*--Fin Seeders viejos--*/

        factory(Empleado::class,5)->create(); //Se le tiene que añadir: use App\Empleado
    }
}
