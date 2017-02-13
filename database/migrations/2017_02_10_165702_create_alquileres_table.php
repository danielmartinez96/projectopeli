<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquileresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquileres', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('confirmacion',array('aceptado','pendiente'));
            $table->date('fecha');
            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('id_users');
            $table->integer('id_pelicula');
            $table->foreign('id_pelicula')->references('id')->on('id_peliculas');
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
        Schema::drop('alquileres');
    }
}
