<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number')->unique();
            $table->date('order_date');
            $table->date('required_date');
            $table->date('shipped_date');
            $table->string('status',50);
            $table->string('comments',50);
            $table->string('customer_number');
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
        Schema::dropIfExists('oders');
    }
}
