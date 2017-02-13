@extends('layouts.app')
@section('content')
<div class="container body-page">
    <div class="row">

      <div class="col-md-3 col-md-push-9 side-bar">




  <div class="col-md-12">



@if($generos->count()>0)




          <h1>Generos</h1>

            <ul>

              @foreach ($generos as $genero)

              <a href="../../peliculas/genero/{{$genero->id}}"><li class="genero">{{$genero->nombre}}</li></a>
              <br>

              @endforeach



            </ul>



           </div>





@endif
        </div>
        <div class="col-md-9 col-md-pull-3 contenedor-pelis">

            @yield('contenido')

        </div>

@endsection
