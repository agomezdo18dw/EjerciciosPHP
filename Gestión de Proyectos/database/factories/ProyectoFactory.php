<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->domainWord,
        'titulo' => $faker->company,//sentence(3),
        'fechainicio' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years', $timezone = null, $format = 'Y-m-d'),
        'fechafin' => $faker->dateTimeBetween($startDate = '-19 years', $endDate = 'now', $timezone = null, $format = 'Y-m-d'),
        'horasestimadas' => $faker->numberBetween($min = 10, $max = 1000),
        'empleado_id' =>  $faker->numberBetween($min = 1, $max = 5)
    ];
});
