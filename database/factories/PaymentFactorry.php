<?php
use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'custome_number'=>$faker->unique()->numberBetween('1','1000'),
        'payment_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'amount'=>$faker->numberBetween('1','1000'),

    ];
});
