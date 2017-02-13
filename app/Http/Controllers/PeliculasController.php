<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pelicula;
use App\Genero;
use App\Generopeli;
use App\Comentario;
class PeliculasController extends Controller
{

  public function index()
  {

  $peliculas = Pelicula::paginate(16);
  $generos= Genero::all();

  return view('peliculas.mostrar_peliculas',compact('peliculas','generos'));

  }
    public function show($id)
    {
      $generos= Genero::all();
      $pelicula = Pelicula::find($id);
      $generopelis= $pelicula->generopelis;

      $generosinfo='';

      foreach ($generopelis as $g) {

      $genero = Genero::find($g->id_genero) ;
      $generosinfo .='&nbsp;'. $genero->nombre;



      }
      $comentarios= Comentario::where('id_pelicula', $id)->join('users','comentarios.id_user','=','users.id')->select('asunto','descripcion','name','id_user')->paginate(3);



      return view('peliculas.mostrar_una_pelicula',compact('pelicula','generos','generosinfo','comentarios'));

    }


  public function showGenero($id)
  {


    $peliculas = Pelicula::join('generopelis','peliculas.id','=','generopelis.id_pelicula')->where('id_genero', $id)->select('peliculas.url_imagen','peliculas.titulo','peliculas.id')->paginate(16);
    $generos= Genero::all();

    return view('peliculas.mostrar_peliculas',compact('peliculas','generos'));

  }


  
}
