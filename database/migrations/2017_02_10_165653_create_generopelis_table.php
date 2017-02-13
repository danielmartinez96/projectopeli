<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneropelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generopelis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_genero');
            $table->foreign('id_genero')->references('id')->on('id_generos');
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
        Schema::drop('generopelis');
    }
}
