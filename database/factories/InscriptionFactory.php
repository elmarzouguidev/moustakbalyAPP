<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Inscription;
use Faker\Generator as Faker;

$factory->define(Inscription::class, function (Faker $faker) {

    return [
        'nomComplet' => $faker->name,
        'dateNissance'=> $faker->date(),
        'sexe'=>'homme',
        'telephone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'adresse' => $faker->sentence(8),
        'ville'=>$faker->sentence(4),
        'diplome'=>'oui',
        'cnss'=>'oui',
        'dateCnss'=>'2020-06-31',
        'cartCNI'=>'cart.png'
       
    ];
});
