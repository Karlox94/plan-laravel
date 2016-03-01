@extends('layouts.baseAdmin')

@section('titulo','Usuarios')

@section('contenido')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Perfiles
        </h1>                        
    </div>
    <div class="col-md-4 form-group">
        <label for="rol">Rol</label>
        <input type="text" name="rol" class="form-control" id="rol" placeholder="Rol">
    </div>
    <div class="col-md-2 form-group">
      <br>
      <a href="" class="btn btn-success form-control">
        <span class="glyphicon glyphicon-plus"></span> Crear
      </a>      
    </div>
    <div class="col-md-12"> 
      <h3>Perfiles registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Rol</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="4"><center><h1 class="text-muted">No hay perfiles aún</h1></center></td>
            </tr>
          </tbody>
      </table>
      <hr>  
    </div> 
</div>

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Usuarios
      </h1>                        
  </div>
  <div class="form-group col-md-3">
      <label>Crear usuario</label>                                   
      <a href="javascript:;" class="forget btn btn-success form-control" data-toggle="modal" data-target=".forget-modal"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
  </div>
  <label class="col-md-offset-3">Buscar usuario</label>
  <div class="form-group input-group col-md-5 col-md-offset-6">    
      <input type="email" class="form-control" placeholder="usuario@correo.unicordoba.edu.co">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
      </span>
  </div>
</div>
<!-- /.row -->
<!-- Modal crear usuario -->
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title">Crear Usuario</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="cedula">Cedula</label>
                        <input type="text" name="cedula" class="form-control" id="cedula" placeholder="Cedula">
                    </div> 
                    <div class="col-md-4 form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombres">
                    </div>  
                    <div class="col-md-4 form-group">                      
                        <label for="apellido">Apellidos</label>
                        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellidos">  
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="ejemplo@correo.unicordoba.edu.co">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Cargo">
                    </div>
                    <div class="col-md-4 form-group">                   
                        <label for="pertenece">Pertenece a</label>                                  
                        <select class="form-control" id="pertenece" name="pertenece">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="">Falcultad</option>
                            <option value="">Proceso</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">                   
                        <label for="depopro">Dependencia o Programa Académico</label>
                        <select class="form-control" id="perfil" name="perfil">
                            <option selected="selected" value="">Seleccione una opción</option>
                        </select>
                    </div>                    
                    <div class="col-md-4 form-group">                   
                        <label for="perfil">Perfil</label>                                  
                        <select class="form-control" id="perfil" name="perfil">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="">Administrador</option>
                            <option value="">Funcionario</option>
                            <option value="">Evaluador</option>
                            <option value="">Jefe</option>
                        </select>
                    </div>                                     
                </div>                                
            </div>                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Crear</button>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<div class="row">
  <div class="col-md-12"> 
    <h3>Usuarios registrados</h3>
    <table class="table table-bordered">
        <thead>
          <tr>
              <td>Id</td>
              <td>Cedula</td>
              <td>Nombres y Apellidos</td>
              <td>Email</td>
              <td>Cargo</td>
              <td>Perfil</td>
              <td>Modificar</td>
              <td>Eliminar</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="8"><center><h1 class="text-muted">No hay usuarios aún</h1></center></td>
          </tr>
        </tbody>
    </table>
    <hr>  
  </div>  
</div>


@stop