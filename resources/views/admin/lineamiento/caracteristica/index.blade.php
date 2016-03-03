@extends('layouts.baseAdmin')

@section('titulo','Caracteristicas')

@section('contenido')

@include('admin.alert')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Caracteristicas
        </h1>                        
    </div>
    {!! Form::open(['route'=>'caracteristica.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-7 form-group">
        {{Form::label('Descripcion de la caracteristica:')}}
        {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '5'])}}
      </div>
      <div class="col-md-5 form-group">   
        {{Form::label('Factor al que pertenece:')}}   
        {{Form::select('factor_id', $factores, null, ['class' => 'form-control','placeholder' => 'Selecciones una opción', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 col-md-offset-3 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Caracteristicas registradas</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Caracteristica</td>
                <td>Factor al que pertenece</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($caracteristicas as $caracteristica)
              <tr>
                <td>{{$caracteristica->id}}</td>
                <td>{{$caracteristica->descripcion}}</td>
                <td>{{$caracteristica->factor->descripcion}}</td>
                <td>
                  {!!link_to_route('caracteristica.edit', $title = 'Modificar', $caracteristica->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['caracteristica.destroy',$caracteristica->id],'method'=>'DELETE']) !!}
                    {{ csrf_field()}}  
                      {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
      <hr>  
    </div> 
</div>

@stop