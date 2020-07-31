<?php
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'products_codes'=>$faker->unique()->numberBetween('1','1000'),
        'product_name'=> $faker->name,
        'product_line'=> App\Models\Productline::all()->random()->id,
        'product_scale'=> $faker->name,
        'product_vendor' => $faker->unique()->name,
        'product_description'=> $faker->text($maxNbChars=20),
        'quanitily_inStock'=> $faker->numberBetween('1','1000'),
        'buy_price'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100) ,
        'MSRP'=>str_random(20),
       // 'updated_at'=>$fake->name,
    ];
});
