<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comunicaciones;
use Faker\Generator as Faker;

$factory->define(Comunicaciones::class, function (Faker $faker) {

    return [
        'CON_ID' => $faker->word,
        'COM_FECHA' => $faker->word,
        'COM_HORA' => $faker->word,
        'COM_MOTIVO' => $faker->word,
        'COM_OBS' => $faker->word
    ];
});
