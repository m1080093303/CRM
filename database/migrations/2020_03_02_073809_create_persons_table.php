<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('name');
            $table->string('lastName');
            $table->string('nameFather');
            $table->string('idNational')->unique();
            $table->string('telephone');
            $table->string('mobile');
            $table->string('address');
            $table->string('evidence');
            $table->string('zipCode');
            $table->unsignedInteger('base_id')->nullable();
            $table->string('photo');
            $table->string('scan_idNatinal');
            $table->string('scan_degree_education');
//            $table->foreign('base_id')->references('id')->on('base')->onDelete('cascade');
            $table->foreign('base_id')->references('id')->on('base')->onDelete('cascade');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('persons');//
    }
}
