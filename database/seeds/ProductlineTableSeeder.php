<?php

use Illuminate\Database\Seeder;

class ProductlineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Productline::class,25)->create();
    }
}
