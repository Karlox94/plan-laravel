@extends('layouts.baseAdmin')

@section('titulo','Editar Facultad')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Modificar Facultad
      </h1>                        
  </div>

  <div class="col-md-4 col-md-offset-4">
    <div class="row">
      {!! Form::model($facultad,['route'=>['facultad.update',$facultad->id],'method'=>'PUT']) !!}
        {{ csrf_field()}}
        <div class="col-md-12 form-group">
          {{Form::label('Id:')}}
          {{Form::text('id',null,['class' => 'form-control', 'disabled' => 'disabled'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Nombre:')}}
          {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
        </div>
        <div class="col-md-6 form-group">
          <br>
          {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
        </div>
      {!! Form::close() !!}  
      <div class="col-md-6">
        <br>
        <a href="{{url('facultad')}}" class="btn btn-danger form-control">Cancelar</a>
      </div>
    </div>
  </div>
</div>

@stop