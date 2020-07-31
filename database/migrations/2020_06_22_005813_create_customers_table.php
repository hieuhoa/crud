<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name',50)->unique();
            $table->string('customer_lastName',50);
            $table->string('customer_firstName',50);
            $table->string('phone',50);
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('state',100);
            $table->string('postal_code',50);
            $table->string('country',100);
            $table->string('salesRep_employeeNumber',50);
            $table->string('credit_limit',50);
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
        Schema::dropIfExists('customers');
    }
}
