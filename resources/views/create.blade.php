@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
 <div class="offset-md-3 col-md-6">
   <?php if ($resultado!=""): ?>
     <div class="alert alert-success" role="alert">
       {{$resultado}}
     </div>
   <?php endif; ?>
   <div>

   </div>
    <div class="card">
       <div class="card-header text-center">
          Añadir cliente
       </div>

       <div class="card-body" style="padding:30px">

          <form method="POST" action="/catalog/create">
          {{ csrf_field() }}
          <div class="form-group">
             <label for="title">Nombre</label>
             <input type="text" name="nombre" id="nombre" class="form-control">
          </div>

          <div class="form-group">
            <label for="title">Imagen</label>
            <input type="file" name="imagen" id="imagen" class="form-control">
          </div>

          <div class="form-group">
            <label for="title">Fecha Nacimiento</label>
            <input type="text" name="fecha" id="fecha" class="form-control">
          </div>

          <div class="form-group">
            <label for="title">Correo</label>
            <input type="mail" name="correo" id="correo" class="form-control">
          </div>

          <div class="form-group text-center">
             <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                 Añadir cliente
             </button>
          </div>

          </form>

       </div>
    </div>
 </div>
</div>

@stop
