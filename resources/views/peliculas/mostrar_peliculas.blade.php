
@extends('layouts.body_page')

@section('contenido')

@if($peliculas->count()>0)

@foreach ($peliculas as $pelicula )

          <div class="col-md-3 poster-relativo">
            <div class="poster-media-card" id="pelicula_{{$pelicula->id}}">
              <a href="../../pelicula/{{$pelicula->id}}" title="{{$pelicula->titulo}}">
                <img src="{{$pelicula->url_imagen}}"
                class="poster"alt="{{$pelicula->titulo}}" border="0">
                </a>
                </div>

                <div class="info">

                  <a href="pelicula\{{$pelicula->id}}">
                    {{$pelicula->titulo}}
                  </a>

                </div>

           </div>

@endforeach
<div class="text-center">
  {{ $peliculas->render()}}
  <p>Página {{$peliculas->currentPage()}} de {{$peliculas->lastPage()}} </p>
</div>

@else
          <div class="panel panel-default">
                         <div class="panel panel-default">
                             <div class="panel-heading">Peliculas no encontradas</div>

                             <div class="panel-body">
                                 No existe ninguna pelicula
                             </div>
                         </div>
                         </div>

@endif






@endsection
