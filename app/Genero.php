<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{

  public function generopelis()
  {

    return $this->hasMany('Generopeli');

  }//


}
