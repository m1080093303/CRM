<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('idc_product');
            $table->foreign('id_product')->refrences('id')->on('products')->onDelete('cascade');;
            $table->unsignedInteger('id_base')->index();
            $table->foreign('id_base')->refrences('id')->on('base')->onDelete('cascade');;

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
        Schema::drop('stors');
    }
}
