<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {

    return [
        'NAME' => $faker->word,
        'EMAIL' => $faker->word,
        'EMAIL_VERIFIED_AT' => $faker->date('Y-m-d H:i:s'),
        'PASSWORD' => $faker->word,
        'REMEMBER_TOKEN' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
