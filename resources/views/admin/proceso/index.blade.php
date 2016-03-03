@extends('layouts.baseAdmin')

@section('titulo','Procesos')

@section('contenido')

@include('admin.alert')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" id="proceso">
            Procesos
        </h1>                        
    </div>

    {!! Form::open(['route'=>'proceso.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-4 form-group">
        {{Form::label('Nombre del proceso:')}}
        {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Procesos registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Proceso</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($procesos as $proceso)
              <tr>
                <td>{{$proceso->id}}</td>
                <td>{{$proceso->nombre}}</td>
                <td>
                  {!!link_to_route('proceso.edit', $title = 'Modificar', $parameters = $proceso->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['proceso.destroy',$proceso->id],'method'=>'DELETE']) !!}
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