@extends('layouts.baseAdmin')

@section('titulo','Lineamientos')

@section('contenido')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lienamientos
        </h1>                        
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form class="form" action="" method="" role="form" name="plan">
            <div class="row">
                <div class="form-group col-md-3">
                    <label  for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Lienamiento">
                </div>
                <div class="form-group col-md-2">
				    <label></label>                                    
				    <a href="{{url('')}}"><button type="button" class="btn btn-success form-control"><span class="glyphicon glyphicon-plus"></span> Registrar</button></a>
				</div>    
            </div>                                                       
        </form>
    </div>   
    <div class="col-md-12">                        
    <h3>Lineamientos registrados</h3>
        <table class="table table-bordered">
            <thead>
              <tr>
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Modificar</td>
                  <td>Eliminar</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="7"><center><h1 class="text-muted">No hay lineamientos aún</h1></center></td>
              </tr>
            </tbody>
        </table>
    <hr>  
    </div> 
	<div class="col-lg-12">
		<h1>Factores</h1>
		<hr>
        <form class="form" action="" method="" role="form" name="plan">
            <div class="row">
                <div class="form-group col-md-7">
                    <label  for="nombre">Nombre</label>
                    <textarea name="nombre" class="form-control" id="nombre" rows='4'></textarea>
                </div>
                <div class="col-md-5">                  
                  <div class="row">
            				<div class="form-group col-md-12">
            				    <label  for="lineamiento">Tipo de lineamiento</label>
            				    <select class="form-control" id="lineamiento" name="lineamiento">
            				        <option selected="selected" value="">Seleccione una opción</option>
            				        <option value="pregrado">Pregrado</option>
            				        <option value="postgrado">Postgrado</option>
            				        <option value="institucional">Institucional</option>
            				    </select>
            				</div>    
                    <div class="form-group col-md-5 col-md-offset-7">
            				    <label></label>                                    
            				    <a href="{{url('')}}"><button type="button" class="btn btn-success form-control"><span class="glyphicon glyphicon-plus"></span> Registrar</button></a>
            				</div>                  
                  </div>
                </div>
            </div>                                                       
        </form>
    </div>   
    <div class="col-md-12">                        
    <h3>Factores registrados</h3>
        <table class="table table-bordered">
            <thead>
              <tr>
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Lienamiento</td>
                  <td>Modificar</td>
                  <td>Eliminar</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="7"><center><h1 class="text-muted">No hay factores aún</h1></center></td>
              </tr>
            </tbody>
        </table>
    <hr>
    </div> 
  <div class="col-lg-12">
    <h1>Caracteristicas</h1>
    <hr>
        <form class="form" action="" method="" role="form" name="plan">
            <div class="row">
                <div class="form-group col-md-7">
                    <label  for="nombre">Nombre</label>
                    <textarea name="nombre" class="form-control" id="nombre" rows='4'></textarea>
                </div>
                <div class="col-md-5">                  
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label  for="lineamiento">Factor</label>
                        <select class="form-control" id="lineamiento" name="lineamiento">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="pregrado">Factor1</option>
                            <option value="postgrado">Factor2</option>
                            <option value="institucional">Factor3</option>
                        </select>
                    </div>    
                    <div class="form-group col-md-5 col-md-offset-7">
                        <label></label>                                    
                        <a href="{{url('')}}"><button type="button" class="btn btn-success form-control"><span class="glyphicon glyphicon-plus"></span> Registrar</button></a>
                    </div>                  
                  </div>
                </div>
            </div>                                                       
        </form>
    </div>   
    <div class="col-md-12">                        
    <h3>Caracteristicas registradas</h3>
        <table class="table table-bordered">
            <thead>
              <tr>
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Factor</td>
                  <td>Modificar</td>
                  <td>Eliminar</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="7"><center><h1 class="text-muted">No hay caracteristicas aún</h1></center></td>
              </tr>
            </tbody>
        </table>
    <hr>
    </div> 

</div>

@stop