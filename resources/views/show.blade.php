@extends('layouts.master')

@section('content')

<div class="row">

  <div class="col-sm-4">
    <img src="{{asset($clientes->imagen)}}" style="width:340px"/>
  </div>
  <div class="col-sm-8">
      <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$clientes->nombre}}</br>
      </h4>
      <h6 style="min-height:45px;margin:10px 0 10px 0">
            <b>Correo-e:</b> {{$clientes->correo}}</br></br>
            <b>Fecha de nacimiento: </b>{{$clientes->fecha_nacimiento}}</br>
      </h6>

      <a href="{{ url('/catalog/edit/'.$id) }}" class="btn btn-warning" role="button">Editar</a>
      <a href="#" class="btn btn-info" role="button">Volver</a>
  </div>


</div>


@stop
