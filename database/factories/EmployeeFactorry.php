<?php

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'last_name'=> $faker->name,
        'first_name'=> $faker->name,
        'extension'=> $faker->name,
        'email' => $faker->unique()->safeEmail,
        'office_code'=> $faker->name,
        'reports_to'=> $faker->name,
        'job_title'=> $faker->name,
        //'updated_at'=>$fake->name,
        
    ];
});
