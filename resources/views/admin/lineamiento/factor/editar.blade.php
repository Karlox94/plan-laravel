@extends('layouts.baseAdmin')

@section('titulo','Editar Factor')

@section('contenido')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">
          Modificar Factor
      </h1>                        
  </div>

  <div class="col-md-6 col-md-offset-3">
    <div class="row">      
      {!! Form::model($factor,['route'=>['factor.update',$factor->id],'method'=>'PUT']) !!}
        {{ csrf_field()}}
        <div class="col-md-12 form-group">
          {{Form::label('Id:')}}
          {{Form::text('id',null,['class' => 'form-control', 'disabled' => 'disabled'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Descripcion del factor:')}}
          {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '6'])}}
        </div>
        <div class="col-md-12 form-group">
          {{Form::label('Lineamiento al que pertenece:')}}
          {{Form::select('lineamiento_id', $alineamientos,null, ['class' => 'form-control', 'placeholder' => $factor->Lineamiento->descripcion])}}
        </div>
        <div class="col-md-6 form-group">
          <br>
          {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
        </div>
      {!! Form::close() !!}  
      <div class="col-md-6">
        <br>
        <a href="{{url('factor')}}" class="btn btn-danger form-control">Cancelar</a>
      </div>
    </div>
  </div>
</div>

@stop