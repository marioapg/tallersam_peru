<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente');
            $table->string('cono');
            $table->text('direccion');
            $table->string('distrito');
            $table->string('recepcionista');
            $table->string('email');
            $table->string('phone');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->string('placa');
            $table->string('kilometraje');
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
        Schema::drop('drop=ot');
    }
}
