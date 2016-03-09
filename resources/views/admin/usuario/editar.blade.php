@extends('layouts.baseAdmin')

@section('titulo','Editar Usuario')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Modificar Usuario
      </h1>                        
  </div>

  <div class="col-md-6 col-md-offset-3">
    <div class="row">      
      {!! Form::model($usuario,['route'=>['usuario.update',$usuario->id],'method'=>'PUT']) !!}
        {{ csrf_field()}}
        <div class="col-md-12 form-group">
          {{Form::label('Id:')}}
          {{Form::text('id',null,['class' => 'form-control', 'disabled' => 'disabled'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Nombre:')}}
          {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Apellido:')}}
          {{Form::text('apellido',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Email:')}}
          {{Form::email('email',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Cargo:')}}
          {{Form::text('cargo',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Dependencia:')}}
          {{Form::text('dependencia',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Rol:')}}
          {{Form::select('rol_id', $aroles,null, ['class' => 'form-control', 'placeholder' => $usuario->rols->first()->nombre])}}
        </div>
        <div class="col-md-6 form-group">
          <br>
          {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
        </div>
      {!! Form::close() !!}  
      <div class="col-md-6">
        <br>
        <a href="{{url('usuario')}}" class="btn btn-danger form-control">Cancelar</a>
      </div>
    </div>
  </div>
</div>

@stop