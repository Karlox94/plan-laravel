@extends('layouts.baseAdmin')

@section('titulo','Editar Caracteristica')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Modificar Caracteristica
      </h1>                        
  </div>

  <div class="col-md-6 col-md-offset-3">
    <div class="row">      
      {!! Form::model($caracteristica,['route'=>['caracteristica.update',$caracteristica->id],'method'=>'PUT']) !!}
        {{ csrf_field()}}
        <div class="col-md-12 form-group">
          {{Form::label('Id:')}}
          {{Form::text('id',null,['class' => 'form-control', 'disabled' => 'disabled'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Descripcion de la caracteristica:')}}
          {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '6'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Factor al que pertenece:')}}
          {{Form::select('factor_id', $afactores,null, ['class' => 'form-control', 'placeholder' => $caracteristica->factor->descripcion])}}
        </div>
        <div class="col-md-6 form-group">
          <br>
          {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
        </div>
      {!! Form::close() !!}  
      <div class="col-md-6">
        <br>
        <a href="{{url('caracteristica')}}" class="btn btn-danger form-control">Cancelar</a>
      </div>
    </div>
  </div>
</div>

@stop