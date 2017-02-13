@extends('layouts.body_page')

@section('contenido')


<div class="container ">

  <div class="row">
<br>
  <div class="col-md-3 imagen-pelicula" >

   <div class="imagen-grande">
    <img class="poster" src="{{$pelicula->url_imagen}}" alt="{{$pelicula->titulo}}">

  </div>
  </div>


  <div class="col-md-5 informacion-pelicula" >


<u><h1 class="text-center">{{$pelicula->titulo}}</h1></u>
<u><h3> Sipnopsis: </h3></u>
<p>{{$pelicula->sipnopsis}}</p>
<br>
<p style="font-size:15px;"><u>Fecha de Estreno</u>: {{$pelicula->lanzamiento}}</p>
<br>
<p style="font-size:15px;"><u>Generos:</u>

{{$generosinfo}}


</p>

<div class="row">
<div class="col-md-11 " align="right">

<form  action="{{ url('pelicula/'.$pelicula->id.'/alquilar') }}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <button type="submit" class="btn btn-info" >
    Alquilar
  </button>

</form>

</div>
</div>
<br>
</div>





  </div>
  <br>
  <div class="row">
<br>
  <div class="col-md-8 comentario-pelicula">
    <br>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('pelicula/'.$pelicula->id.'/comentar') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="asunto" class="col-lg-2 control-label">Asunto</label>
    <div class="col-lg-10">
     <input type="text" name="asunto" id="asunto"
             placeholder="Asunto">

    </div>
  </div>
  <div class="form-group">
    <label for="comentario" class="col-lg-2 control-label">Comentario</label>
    <div class="col-lg-10">
     <textarea type="text" name="comentario" rows="3" id="comentario" style="width:100%;"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-info">comentar</button>
    </div>
  </div>
</form>

<br>
  <div class="row comentario-pelicula">

      <u><h2>Comentarios</h2></u>



  <ul class="lista-comentarios">
    @if($comentarios->count()>0)

    @foreach ($comentarios as $comentario )
    <form class="form-horizontal comentario-recuadro" >


    <li class="coment"> <h3> &nbsp;&nbsp;&nbsp;<a href="#">{{$comentario->name}}</a></h3>
      <div class="form-group">
        <label class="col-lg-2">Asunto:</label>
        <div class="col-lg-10">
          <p>{{$comentario->asunto}}</p>

        </div>
       </div>

      <div class="form-group">
        <label class="col-lg-2">Comentario:</label>
        <div class="col-lg-10">
          <p>{{$comentario->descripcion}}</p>
        </div>
       </div>
    </li>
</form>
@endforeach
<br>
{{ $comentarios->render()}}
<p>Página {{$comentarios->currentPage()}} de {{$comentarios->lastPage()}} </p>

@endif
  </ul>


  </div>

  </div>
  </div>
</div>






@endsection
