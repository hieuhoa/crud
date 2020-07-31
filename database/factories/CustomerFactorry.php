<?php

use Faker\Generator as Faker;
use App\Models\Customer;
$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'customer_name'=>$faker->unique()->name,
        'customer_lastName'=>$faker->name,
        'customer_firstName'=>$faker->name,
        'phone'=>$faker->tollFreePhoneNumber(),
        'address_line1'=>$faker->address(),
        'address_line2'=>$faker->address(),
        'state' =>$faker->text($maxNbChars=50),
        'postal_code'=>$faker->numberBetween(1,100),
        'country'=>$faker->country(),
        'salesRep_employeeNumber'=>$faker->numberBetween(1,100),
        'credit_limit'=>$faker->numberBetween(1,10000),
    ];
});
