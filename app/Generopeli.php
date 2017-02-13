<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generopeli extends Model
{

  public function genero()
  {

    return $this->belongsTo('App\Genero');

  }

  public function pelicula()
  {

    return $this->belongsTo('App\Pelicula');

  }
}
