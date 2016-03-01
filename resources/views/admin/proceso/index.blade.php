@extends('layouts.baseAdmin')

@section('titulo','Procesos')

@section('contenido')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Procesos
        </h1>                        
    </div>
    <div class="col-md-4 form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del proceso">
    </div>
    <div class="col-md-2 form-group">
      <br>
      <a href="" class="btn btn-success form-control">
        <span class="glyphicon glyphicon-plus"></span> Crear
      </a>      
    </div>
    <div class="col-md-12"> 
      <h3>Procesos registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Proceso</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="4"><center><h1 class="text-muted">No hay Procesos aún</h1></center></td>
            </tr>
          </tbody>
      </table>
      <hr>  
    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Depdendencias
        </h1>                        
    </div>
    <div class="col-md-4 form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de la dependencia">
    </div>
    <div class="col-md-4 form-group">
      <label for="proceso">Proceso</label>
      <select class="form-control" id="proceso" name="proceso">
          <option selected="selected" value="">Seleccione proceso al que pertenece</option>
          <option value=""></option>
          <option value=""></option>
      </select>
    </div>
    <div class="col-md-2 form-group">
      <br>
      <a href="" class="btn btn-success form-control">
        <span class="glyphicon glyphicon-plus"></span> Crear
      </a>      
    </div>
    <div class="col-md-12"> 
      <h3>Dependencias registradas</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Dependencia</td>
                <td>Proceso</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="5"><center><h1 class="text-muted">No hay dependencias aún</h1></center></td>
            </tr>
          </tbody>
      </table>
      <hr>  
    </div> 
</div>



@stop