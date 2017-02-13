<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
  public function user()
  {

    return $this->belongsTo('User');

  }

  public function pelicula()
  {

    return $this->belongsTo('App\Pelicula');

  }




}
