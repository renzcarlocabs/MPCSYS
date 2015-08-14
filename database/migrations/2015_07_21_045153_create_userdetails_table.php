<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('user_level_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('address');
            $table->string('contact_no');
            $table->string('date_employed');
            $table->integer('service_years');
            $table->integer('basic_salary');
            $table->string('img');
            $table->integer('user_id');
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
        Schema::drop('user_details');
    }
}
