<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comentario;

class Pelicula extends Model
{


  public function comentarios()
  {

    return $this->hasMany('App\Comentario','id_pelicula');

  }//

  public function generopelis()
  {

    return $this->hasMany('App\Generopeli','id_pelicula');

  }//

  public function alquileres()
  {

    return $this->hasMany('Alquilere');

  }//


}
