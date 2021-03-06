@extends('layouts.baseAdmin')

@section('titulo','Facultades')

@section('contenido')

@include('admin.alert')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" id="facultad">
            Facultades
        </h1>                        
    </div>

    {!! Form::open(['route'=>'facultad.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-4 form-group">
        {{Form::label('Nombre de la facultad:')}}
        {{Form::text('nombre',null,['class' => 'form-control', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Facultades registradass</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Facultad</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($facultades as $facultad)
              <tr>
                <td>{{$facultad->id}}</td>
                <td>{{$facultad->nombre}}</td>
                <td>
                  {!!link_to_route('facultad.edit', $title = 'Modificar', $parameters = $facultad->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['facultad.destroy',$facultad->id],'method'=>'DELETE']) !!}
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


