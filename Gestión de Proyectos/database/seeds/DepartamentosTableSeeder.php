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
            'nombre' => 'Informatica'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Ventas'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Marketing'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Finanzas'
        ]);
    }
}
