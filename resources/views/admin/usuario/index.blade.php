@extends('layouts.baseAdmin')

@section('titulo','Usuarios')

@section('contenido')

@include('admin.alert')
<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header" id="usuario">
          Usuarios
      </h1>                        
  </div>

  <div class="col-md-2">
      <label>Crear Usuario:</label>                                   
      <a href="javascript:;" class="forget btn btn-success form-control" data-toggle="modal" data-target=".forget-modal"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
  </div>
  <div class="col-md-5 pull-right">    
    <label>Buscar Usuario:</label>
    {!! Form::open(['route'=>'usuario.index', 'method'=>'GET', 'class' => 'input-group', 'role' => 'search']) !!}   
        {{Form::email('email',null,['class' => 'form-control', 'required' => 'required', 'placeholder' => 'usuario@correo.unicordoba.edu.co'])}}      
        <span class="input-group-btn">
          {{Form::submit('Buscar',['class' => 'btn btn-default'])}}
        </span>
    {!! Form::close() !!}  
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
                    {!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
                      {{ csrf_field()}}
                      <div class="col-md-4 form-group">
                        {{Form::label('Nombres:')}}
                        {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
                      </div>
                      <div class="col-md-4 form-group">
                        {{Form::label('Apellidos:')}}
                        {{Form::text('apellido',null,['class' => 'form-control', 'required' => 'required'])}}
                      </div>
                      <div class="col-md-4 form-group">
                        {{Form::label('Email:')}}
                        {{Form::email('email',null,['class' => 'form-control', 'required' => 'required'])}}
                      </div>
                      <div class="col-md-4 form-group">
                        {{Form::label('Dependencia o Programa:')}}
                        {{Form::text('dependencia',null,['class' => 'form-control', 'required' => 'required'])}}
                      </div>
                      <div class="col-md-4 form-group">
                        {{Form::label('Cargo:')}}
                        {{Form::text('cargo',null,['class' => 'form-control', 'required' => 'required'])}}
                      </div>
                      <div class="col-md-4 form-group">
                        {{Form::label('Rol:')}}
                        {{Form::select('rol_id', $roles, null, ['class' => 'form-control','placeholder' => 'Selecciones una opción', 'required' => 'required'])}}
                      </div>                                                       
                </div>                                
            </div>                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>               
                  {{Form::submit('Crear',['class' => 'btn btn-success'])}}
                {!! Form::close() !!}  
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
              <td>Nombres y Apellidos</td>
              <td>Email</td>
              <td>Dependencia o Programa</td>
              <td>Cargo</td>
              <td>Perfil</td>
              <td>Modificar</td>
              <td>Eliminar</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios  as $usuario)
              <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre}} {{$usuario->apellido}} </td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->dependencia}}</td>
                <td>{{$usuario->cargo}}</td>
                <td>{{$usuario->rols->first()->nombre}}</td>
                <td>
                  {!!link_to_route('usuario.edit', $title = 'Modificar', $parameters = $usuario->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['usuario.destroy',$usuario->id],'method'=>'DELETE']) !!}
                    {{ csrf_field()}}  
                      {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                  {!! Form::close() !!}
                </td>
              </tr>              
            @endforeach            
            @if($cantidad == 0)
              <script type="text/javascript">  
                  alert('El usuario no existe en la base de datos');
              </script>
            @endif
        </tbody>
    </table>
    <hr>  
  </div>  
</div>
<center>{{$usuarios->render()}}</center>

@stop

