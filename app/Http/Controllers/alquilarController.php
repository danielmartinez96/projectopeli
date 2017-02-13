<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Alquilere;
use Carbon\Carbon;

class alquilarController extends Controller
{

  public function store(Request $request,$id)
  {
    if(auth::check())
    {
    $alquiler= new Alquilere;
    $alquiler->confirmacion= 2;
    $alquiler->id_pelicula= $id;
    $alquiler->fecha= Carbon::now();
    $idusuario = Auth::user()->id;
    $alquiler->id_user= $idusuario;
    $alquiler->save();

   }
   else {

     return redirect('/login');
   }
return redirect()->action('PeliculasController@show', $id);

  }

  public function show()
  {
$alquileres = Alquilere::join('peliculas','alquileres.id_pelicula','=','peliculas.id')->select('confirmacion','fecha','id_pelicula','alquileres.id','titulo','url_imagen','id_user')->paginate(16);



    return view('Alquilar.Alquileres')->with('alquileres', $alquileres);
  }


    public function update($id,$indice)
    {
      $alquiler=Alquilere::find($id);

      if(count($alquiler)>=1){





      if($indice==1)
      {


        $alquiler->confirmacion = 1;
      $alquiler->save();
      }
    else {
      $alquiler->delete();
    }

    }


return redirect()->action('alquilarController@show');
    }

    //
}
