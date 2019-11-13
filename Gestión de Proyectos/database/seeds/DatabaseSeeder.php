<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpleadosTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
    }
}
