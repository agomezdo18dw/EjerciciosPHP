<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            //'id' => '1',
            'nombre' => 'Informatica'
        ]);
        DB::table('departamentos')->insert([
            //'id' => '2',
            'nombre' => 'Ventas'
        ]);
        DB::table('departamentos')->insert([
            //'id' => '3',
            'nombre' => 'Marketing'
        ]);
        DB::table('departamentos')->insert([
            //'id' => '4',
            'nombre' => 'Finanzas'
        ]);
    }
}
