<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre_prenda' => $faker->sentence(),
        'estilo' => $faker->randomElement(['Acampanado' ,'BootCut', 'Skinny','Straight','Superskinny']),
        'color' => $faker->randomElement(['Azul' ,'Negro', 'Cafe', 'Rojo', 'Beige']),
        'talla' => $faker->randomElement(['XS' ,'S', 'M','M']),
        'descripcion' => $faker->sentence(),
    ];
});
