@extends('layouts.app')

@section('title', 'Equipos create')

@section('content')
 

<div id="form-registrar-equipos"> 

     <form> <!-- begining of  the form-->
    <fieldset>
    <legend id="titulo-formulario">Formulario de Registro</legend>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 nombre">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <br>
    <label for="inputEmail3" class="col-sm-2 Ciudad">Ciudad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
    </div>
    <label for="inputEmail3" class="col-sm-2 director">Director</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="director" placeholder="Director">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Estadio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="estadio" placeholder="Estadio">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Año</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ano" placeholder="Año">
    </div>

  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button>
    </div>
  </div>
 <fieldset>
</form>  <!-- end of  the form--> 
</div>
</div>

@endsection

