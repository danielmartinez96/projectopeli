<?php

use Illuminate\Database\Seeder;
use App\Pelicula;

class seed_uno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Pelicula::class,20)->create();
      factory(App\User::class,19)->create();
      DB::table('users')->insert(  array(
        'name'=>'daniel',
        'email'=>'dani@gmail.com',
        'password'=>'123456',
       'remember_token' => str_random(10),
          ));
      DB::table('generos')->insert(  array(
    array('nombre' =>'Accion'),
    array('nombre' =>'Aventura'),
    array('nombre' =>'Animacion'),
    array('nombre' =>'Comedia'),
    array('nombre' =>'Infantil'),
    array('nombre' =>'Romance'),
    array('nombre' =>'Terror'),
    array('nombre' =>'Drama')

  ));
  factory(App\Generopeli::class,50)->create();
  factory(App\Comentario::class,50)->create();

        //
     }
}
