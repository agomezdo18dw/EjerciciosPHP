<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        DB::table('posts')->truncate();

        $post = Post::create([
        	'title' => 'First Post',
        	'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!',
            'published_at' => date('Y/m/d'),
            'category_id' => 1,
            'user_id' => 1
    	]);
        $post = Post::create([
        	'title' => 'Laravel',
        	'excerpt' => 'Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5 y PHP 7. ',
            'body' => 'Laravel tiene como objetivo ser un framework que permita el uso de una sintaxis elegante y expresiva para crear código de forma sencilla y permitiendo multitud de funcionalidades. Intenta aprovechar lo mejor de otros frameworks y aprovechar las características de las últimas versiones de PHP.2​. Gran parte de Laravel está formado por dependencias, especialmente de Symfony, esto implica que el desarrollo de Laravel dependa también del desarrollo de sus dependencias.',
            'published_at' => date('Y/m/d'),
            'category_id' => 2,
            'user_id' => 2
    	]);
    }
}

