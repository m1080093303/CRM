<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
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
            $table-> string('name');
            $table->string('lastName');
            $table->string('idNational')->unique();
            $table->string('phone_number');
            $table->string('phone_number2');
            $table->string('mobile');
            $table->string('mobile2');
            $table->string('address');
            $table->string('zipCode')->nullable();
            $table->unsignedInteger('id_base')->index();
            $table->foreign('id_base')->references('id')->on('base')->onDelete('cascade');


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
        Schema::drop('customers');
    }
}
