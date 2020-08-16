<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Instituciones;
use Faker\Generator as Faker;

$factory->define(Instituciones::class, function (Faker $faker) {

    return [
        'INS_DESCRIPCION' => $faker->word,
        'INS_PAIS' => $faker->word,
        'INS_PROVINCIA' => $faker->word,
        'INS_CANTON' => $faker->word,
        'INS_PARROQUIA' => $faker->word,
        'INS_DISTRITO' => $faker->word,
        'INS_ZONA' => $faker->word,
        'INS_COD_CIRTCUITO' => $faker->word,
        'INS_REGIMEN' => $faker->randomDigitNotNull,
        'INS_DIRECCION' => $faker->word,
        'INS_TELEFONO' => $faker->word,
        'INS_EMAIL' => $faker->word,
        'INS_TIPO' => $faker->randomDigitNotNull,
        'INS_OFERTA' => $faker->randomDigitNotNull,
        'INS_NEST_INICIAL' => $faker->word,
        'INS_NEST_BASICA' => $faker->word,
        'INS_NEST_BACHILLERATO' => $faker->word,
        'INS_PROFS_INICIAL' => $faker->word,
        'INS_PROFS_BASICA' => $faker->word,
        'INS_PROFS_BACHILLERATO' => $faker->word,
        'INS_ESTADO' => $faker->randomDigitNotNull
    ];
});
