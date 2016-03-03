@extends('layouts.baseAdmin')

@section('titulo','Procesos')

@section('contenido')

@include('admin.alert')
<div class="row">
    <div class="col-lg-12" id="dependencia">
        <h1 class="page-header">
            Dependencias
        </h1>                        
    </div>
    {!! Form::open(['route'=>'dependencia.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-4 form-group">
        {{Form::label('Nombre de la dependencia:')}}
        {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
      </div>
      <div class="col-md-4 form-group">   
        {{Form::label('Proceso al que pertenece:')}}   
        {{Form::select('proceso', $procesos2, null, ['class' => 'form-control','placeholder' => 'Selecciones una opción'])}}
      </div>
      <div class="col-md-2 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Dependencias registradas</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Dependencia</td>
                <td>Proceso al que pertenece</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            {{--*/ $i = 0 /*--}}
            @foreach ($dependencias as $dependencia)
              <tr>
                <td>{{$dependencia->id}}</td>
                <td>{{$dependencia->nombre}}</td>
                <td>{{$dependencia->proceso->nombre}}</td>
                <td>
                  {!!link_to_route('dependencia.edit', $title = 'Modificar', $parameters = $dependencia->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['dependencia.destroy',$dependencia->id],'method'=>'DELETE']) !!}
                    {{ csrf_field()}}  
                      {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                  {!! Form::close() !!}
                </td>
              </tr>
              {{--*/ $i = $i+1 /*--}}
            @endforeach
          </tbody>
      </table>
      <hr>  
    </div> 
</div>



@stop