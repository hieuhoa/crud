<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Productline::class, function (Faker $faker) {
    return [
        //
        'textDescription'=>$faker->text($maxNbChars=20),
        'htmlDescription'=>$faker->text($maxNbChars=20),
    ];
});
