@extends('layouts.baseAdmin')

@section('titulo','Lineamientos')

@section('contenido')

@include('admin.alert')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lienamientos
        </h1>                        
    </div>
</div>
<!-- /.row -->

<div class="row">
    
    {!! Form::open(['route'=>'lineamiento.store', 'method'=>'POST']) !!}
      {{ csrf_field()}}
      <div class="col-md-12 form-group">
        {{Form::label('Descripción del lineamiento:')}}
        {{Form::textarea('descripcion',null,['class' => 'form-control', 'required' => 'required', 'rows' => '5'])}}
      </div>
      <div class="col-md-2 col-md-offset-10 form-group">
        {{Form::submit('Crear',['class' => 'btn btn-success form-control'])}}
      </div>
    {!! Form::close() !!}     
    
    <div class="col-md-12"> 
      <h3>Lineamientos registrados</h3>
      <table class="table table-bordered">
          <thead>
            <tr>
                <td>Id</td>
                <td>Lineamiento</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($lineamientos as $lineamiento)
              <tr>
                <td>{{$lineamiento->id}}</td>
                <td>{{$lineamiento->descripcion}}</td>
                <td>
                  {!!link_to_route('lineamiento.edit', $title = 'Modificar', $parameters = $lineamiento->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                <td>
                  {!! Form::open(['route'=>['lineamiento.destroy',$lineamiento->id],'method'=>'DELETE']) !!}
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