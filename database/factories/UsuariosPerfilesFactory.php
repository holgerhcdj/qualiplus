<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UsuariosPerfiles;
use Faker\Generator as Faker;

$factory->define(UsuariosPerfiles::class, function (Faker $faker) {

    return [
        'USU_ID' => $faker->word,
        'PRF_ID' => $faker->word,
        'UPF_ESTADO' => $faker->randomDigitNotNull
    ];
});
