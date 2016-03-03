@extends('layouts.baseAdmin')

@section('titulo','Lineamientos')

@section('contenido')

@include('admin.alert')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Modificar Lienamiento
        </h1>                        
    </div>
</div>
<!-- /.row -->

<div class="row">
    
    {!! Form::model($lineamiento,['route'=>['lineamiento.update',$lineamiento->id],'method'=>'PUT']) !!}
      {{ csrf_field()}}
      <div class="col-md-12 form-group">
        {{Form::label('Descripción del lineamiento:')}}
        {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '6'])}}
      </div>
      <div class="col-md-2 col-md-offset-8 form-group">        
        {{Form::submit('Modificar',['class' => 'btn btn-primary form-control'])}}
      </div>
      <div class="col-md-2">
        <a href="{{url('lineamiento')}}" class="btn btn-danger form-control">Cancelar</a>
      </div>
    {!! Form::close() !!}     
    

</div>

@stop