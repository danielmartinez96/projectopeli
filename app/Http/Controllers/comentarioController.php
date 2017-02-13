<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Comentario;


class comentarioController extends Controller
{

  public function store(Request $request,$id)
  {
    if(auth::check())
    {
    $comentario= new Comentario;
    $comentario->asunto= $request->input('asunto');
    $comentario->descripcion= $request->input('comentario');
    $comentario->id_pelicula= $id;
     $idusuario = Auth::user()->id;
    $comentario->id_user= $idusuario;
    $comentario->save();

   }
   else {

     return redirect('/login');
   }

    return redirect()->action('PeliculasController@show', $id);

  }


    //
}
