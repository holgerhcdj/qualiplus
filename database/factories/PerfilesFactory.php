<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Perfiles;
use Faker\Generator as Faker;

$factory->define(Perfiles::class, function (Faker $faker) {

    return [
        'PRF_DESCRIPCION' => $faker->word,
        'PRF_CODIGO' => $faker->word,
        'PRF_OBS' => $faker->word
    ];
});
