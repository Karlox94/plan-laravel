@extends('layouts.baseAdmin')

@section('titulo','Usuarios')

@section('contenido')

@include('admin.alert')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Perfiles
        </h1>                        
    </div>

    {!! Form::open(['route'=>'perfil.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-4 form-group">
        {{Form::label('Rol:')}}
        {{Form::text('rol',null,['class' => 'form-control', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 form-group">
        <br>
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Perfiles registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Rol</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($perfiles as $perfil) 
              <tr>
                <td>{{$perfil->id}}</td>
                <td>{{$perfil->rol}}</td>
                <td>
                  {!!link_to_route('perfil.edit', $title = 'Modificar', $parameters = $perfil->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['perfil.destroy',$perfil->id],'method'=>'DELETE']) !!}
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