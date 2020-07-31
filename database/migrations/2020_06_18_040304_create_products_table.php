<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_codes')->unique();
            $table->string('product_name');
            $table->string('product_line');
            $table->string('product_scale');
            $table->string('product_vendor');
            $table->string('product_description',50);
            $table->string('quanitily_inStock',50);
            $table->float('buy_price');
            $table->string('MSRP');
            //$table->foreign('product_line')->references('id')->on('productlines');
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
        Schema::dropIfExists('products');
    }
}
