@extends('layouts.baseAdmin')

@section('titulo','Plan Mejoramiento')

@section('contenido')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Plan de Mejoramiento
        </h1>                        
    </div>
    <div class="col-md-4 form-group">
      <label for="tipoPlan">Tipo de plan a crear</label>
      <select class="form-control" id="tipoPlan" name="tipoPlan">
          <option selected="selected" value="">Seleccione tipo de plan</option>
          <option value="">Plan Proceso</option>
          <option value="">Plan Programa Académico</option>
      </select>
    </div>    
    <div class="col-md-2 form-group">
      <br>
      <a href="" class="btn btn-success form-control">
        <span class="glyphicon glyphicon-plus"></span> Crear
      </a>      
    </div>
    <div class="col-md-4 pull-right">
      <label>Buscar</label>
      <div class="form-group input-group">    
          <input type="text" class="form-control" placeholder="Numero de plan">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
          </span>       
      </div>
    </div>
    <div class="col-md-4 col-md-offset-8">      
      <label class="radio-inline">
        <input type="radio" id="proceso" value="proceso" name="tipoPlan"> Proceso        
      </label>
      <label class="radio-inline">
        <input type="radio" id="programa" value="programa" name="tipoPlan"> Programa Académico
      </label>
    </div>    
    <div class="col-md-12">  
      <h3 class="page-header">
        Planes Registrados
      </h3>                       
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Número</td>
                <td>Tipo</td>
                <td>Creado por</td>
                <td>Fecha</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="7"><center><h1 class="text-muted">No hay Planes aún</h1></center></td>
            </tr>
          </tbody>
      </table>
      </div>
</div>


@stop