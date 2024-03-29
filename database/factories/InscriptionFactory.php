<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inscription;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

use Illuminate\Support\Arr;

$factory->define(Inscription::class, function (Faker $faker) {

    return [
        'nomComplet' => $faker->name,
        'dateNissance' => $faker->date(),
        'sexe' => Arr::random(['homme','femme']),
        'telephone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'adresse' => $faker->sentence(8),
        'ville' => Arr::random(['casablanca','tanger','marrakech','rabat','fes']),
        'diplome' => 'oui',
        'cnss' => 'oui',
        'dateCnss' => '2020-06-31',
        'cartCNI' => 'cart.png',

        'codePer' => 'MOUS-' . rand()

    ];
});
