<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
            $table-> string('name');
            $table->integer('number_product')->unique();
          //  $table->unsignedInteger('id_base');
          //  $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
            $table->string('price');

            $table->timestamps();

        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
