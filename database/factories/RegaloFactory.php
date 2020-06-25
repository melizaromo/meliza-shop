<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Regalo;
use Faker\Generator as Faker;

$factory->define(Regalo::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->randomElement(['Regalo ','Regalo 2' ,'Regalo 3', 'Regalo 4','Regalo 5']),
        'precio' =>  '0',
    ];
});
