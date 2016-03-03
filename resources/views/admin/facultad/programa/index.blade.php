@extends('layouts.baseAdmin')

@section('titulo','Programas')

@section('contenido')

@include('admin.alert')

<div class="row">
    <div class="col-lg-12" id="programa">
        <h1 class="page-header">
            Programas Académicos
        </h1>                        
    </div>
    {!! Form::open(['route'=>'programa.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-4 form-group">
        {{Form::label('Nombre del programa:')}}
        {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
      </div>
      <div class="col-md-4 form-group">   
        {{Form::label('Facultad a la que pertenece:')}}   
        {{Form::select('facultad', $facultades2, null, ['class' => 'form-control','placeholder' => 'Selecciones una opción', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Programas Académicos registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Programa</td>
                <td>Facultad a la que pertenece</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($programas as $programa)
              <tr>
                <td>{{$programa->id}}</td>
                <td>{{$programa->nombre}}</td>
                <td>{{$programa->facultad->nombre}}</td>
                <td>
                  {!!link_to_route('programa.edit', $title = 'Modificar', $parameters = $programa->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['programa.destroy',$programa->id],'method'=>'DELETE']) !!}
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