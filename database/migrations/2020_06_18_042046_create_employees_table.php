<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('employee_number')->unidue();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('extension');
            $table->string('email', 100)->unique();
            $table->string('office_code',50);
            $table->string('reports_to',50);
            $table->string('job_title');
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
        Schema::dropIfExists('employees');
    }
}
