<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idproduct')->unsigned();
            $table->bigInteger('iduser')->unsigned();
            $table->timestamps();
        });

        Schema::table('panier', function (Blueprint $table) {
            $table->foreign('idproduct')->references('id')->on('product');
            $table->foreign('iduser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier');
    }
}
