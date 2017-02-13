@extends('layouts.app')

@section('content')


  <div class="container body-page" >

    <div class="row ">

      <div class="col-md-8 col-md-push-1 ">


        <table class="table table-striped">
    <thead>

    <th>Pelicula</th>
  	<th>Fecha</th>
  	<th>Estado</th>
    <th>Imagen</th>
    <th>Acciones</th>

     </thead>




  <tbody>
  	<tr>
  		@foreach ($alquileres as $alquiler)
  		<td><a href="{{url('/pelicula/'.$alquiler->id_pelicula)}}">{{$alquiler->titulo}}</a></td>
  		<td>{{$alquiler->fecha}}</td>
      <td>{{$alquiler->confirmacion}}</td>

      @if(empty($alquiler->url_imagen))
      <td><img src="{{asset('images')}}/no-imagen.jpg"  style ="width: 100px;" ><td>
      @else
      <td><img src="{{$alquiler->url_imagen}}"  style ="width: 100px;" ></td>
      @endif

  		<td><a class="btn btn-success" href="{{url('user/alquiler/'.$alquiler->id.'/actualizar/1')}}" onclick="return confirm('Desea confirmar el alquiler?')"role="button"><i class="fa fa-pencil-square-o"></i></a>
  		    <a class="btn btn-danger" href="{{url('user/alquiler/'.$alquiler->id.'/actualizar/2')}}" onclick="return confirm('Quiere borrar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>
  		</td>

  	</tr>
  	@endforeach
  </tbody>
</table>

{!! $alquileres->render() !!}




      </div>

    </div>

  </div>

@endsection
