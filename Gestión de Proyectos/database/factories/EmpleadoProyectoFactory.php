<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmpleadoProyecto;
use Faker\Generator as Faker;

$factory->define(EmpleadoProyecto::class, function (Faker $faker) {
    return [
        'empleado_id' =>  $faker->numberBetween($min = 1, $max = 5),
        'proyecto_id' =>  $faker->numberBetween($min = 1, $max = 4)
    ];
});
