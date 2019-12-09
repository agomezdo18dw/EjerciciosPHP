<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
    		'name' => 'admin',
    		'display_name' => 'Administrador',
    		'description' => 'Administrador del sitio web'
		]);
        $role = Role::create([
    		'name' => 'editor',
    		'display_name' => 'Editor',
    		'description' => 'Editor de posts'
        ]);
    }
}
