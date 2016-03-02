@extends('layouts.baseAdmin')

@section('titulo','Editar Perfil')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Modificar Perfil
      </h1>                        
  </div>

  {!! Form::model($perfil,['route'=>['perfil.update',$perfil->id],'method'=>'PUT']) !!}
    {{ csrf_field()}}
    <div class="col-md-4 form-group">
      {{Form::label('Id:')}}
      {{Form::text('id',null,['class' => 'form-control', 'disabled' => 'disabled'])}}
    </div>
    <div class="col-md-4 form-group">
      {{Form::label('Rol:')}}
      {{Form::text('rol',null,['class' => 'form-control', 'required' => 'required'])}}
    </div>
    <div class="col-md-2 form-group">
      <br>
      {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
    </div>
  {!! Form::close() !!}  
  <div class="col-md-2">
    <br>
    <a href="{{url('usuario')}}" class="btn btn-danger form-control">Cancelar</a>
  </div>
</div>

@stop