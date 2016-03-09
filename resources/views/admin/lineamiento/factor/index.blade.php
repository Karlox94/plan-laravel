@extends('layouts.baseAdmin')

@section('titulo','Factores')

@section('contenido')

@include('admin.alert')

<div class="row">
    <div class="col-lg-12" id="programa">
        <h1 class="page-header">
            Factores
        </h1>                        
    </div>
    {!! Form::open(['route'=>'factor.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-7 form-group">
        {{Form::label('Descripcion del factor:')}}
        {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '5'])}}
      </div>
      <div class="col-md-5 form-group">   
        {{Form::label('Lineamiento al que pertenece:')}}   
        {{Form::select('lineamiento_id', $lineamientos, null, ['class' => 'form-control','placeholder' => 'Selecciones una opción', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 col-md-offset-3 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Factores registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Factor</td>
                <td>Lineamiento al que pertenece</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($factores as $factor)
              <tr>
                <td>{{$factor->id}}</td>
                <td>{{$factor->descripcion}}</td>
                <td>{{$factor->lineamiento->descripcion}}</td>
                <td>
                  {!!link_to_route('factor.edit', $title = 'Modificar', $parameters = $factor->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['factor.destroy',$factor->id],'method'=>'DELETE']) !!}
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

<center>{{$factores->render()}}</center>

@stop