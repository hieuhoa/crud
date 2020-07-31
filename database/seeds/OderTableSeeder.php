<?php

use Illuminate\Database\Seeder;
use App\Models\Oder;

class OderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Oder::class,10)->create();
    }
}
