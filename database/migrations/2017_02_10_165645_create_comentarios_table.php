<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asunto');
            $table->text('descripcion');
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
        Schema::drop('comentarios');
    }
}
