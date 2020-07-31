<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code');
            $table->string('order_number');
            $table->string('quantily_odered',50);
            $table->integer('price_each');
            $table->string('orderline_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oderdetails');
    }
}
