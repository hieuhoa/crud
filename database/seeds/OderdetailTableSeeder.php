<?php

use Illuminate\Database\Seeder;
use App\Models\Oderdetail;
class OderdetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Oderdetail::class , 10)->create();
    }
}
