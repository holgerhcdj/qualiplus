<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contactos;
use Faker\Generator as Faker;

$factory->define(Contactos::class, function (Faker $faker) {

    return [
        'INS_ID' => $faker->word,
        'CON_NOMBRES' => $faker->word,
        'CON_CARGO' => $faker->word,
        'CON_TELEFONO' => $faker->word,
        'CON_EMAIL' => $faker->word,
        'CON_OBS' => $faker->word,
        'CON_PRINCIPAL' => $faker->randomDigitNotNull,
        'CON_ESTADO' => $faker->randomDigitNotNull
    ];
});
