<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('write')->default('0');
            $table->boolean('remove')->default('0');
            $table->boolean('modif')->default('0');
            $table->boolean('add_panier')->default('1');
            $table->boolean('add_catalog')->default('0');
            $table->bigInteger('idrole')->unsigned();
          /*  $table->integer('role_user_iduser')->unsigned();*/
            $table->timestamps();
        });

        Schema::table('permission', function (Blueprint $table) {
            $table->foreign('idrole')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission');
    }
}
