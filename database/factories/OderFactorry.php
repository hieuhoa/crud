<?php

use Faker\Generator as Faker;
use App\Models\Oder;
$factory->define(Oder::class, function (Faker $faker) {
    return [
        //
        'order_number'=>$faker->unique()->numberBetween(1,100),
        'order_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'required_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'shipped_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'status'=>$faker->text($maxNbChars=50),
        'comments'=>$faker->text($maxNbChars=50),
        'customer_number'=>$faker->numberBetWeen(1,100)
    ];
});
