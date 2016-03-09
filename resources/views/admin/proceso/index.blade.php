@extends('layouts.baseAdmin')

@section('titulo','Procesos')

@section('contenido')
<link href="{{asset('css/select2.css')}}" rel="stylesheet" type="text/css">

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
      <div class="col-md-4 form-group">   
        {{Form::label('Nombre lider del proceso:')}}   
        {{Form::select('lider_id', $usuarios, null, ['id' => 'lideres', 'class' => 'form-control ', 'placeholder' => '', 'required' => 'required'])}}
      </div>
      <div class="col-md-4 form-group">   
        {{Form::label('Nombre auditor del proceso:')}}   
        {{Form::select('auditor_id', $usuarios, null, ['id' => 'auditores', 'class' => 'form-control','placeholder' => 'Seleccione una opción', 'required' => 'required'])}}
      </div>
      <div class="col-md-2 col-md-offset-10 form-group">
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
                <td>Lider</td>
                <td>Auditor</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($procesos as $proceso)
              <tr>
                <td>{{$proceso->id}}</td>
                <td>{{$proceso->nombre}}</td>
                <td>{{$proceso->lider->nombre}}</td>
                <td>{{$proceso->auditor->nombre}}</td>
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
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/select2full.js')}}"></script>
<script src="{{asset('js/es.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#lideres,#auditores").select2({
      placeholder: 'Nombre'
    });
  });
</script>

<center>{{$procesos->render()}}</center>

@stop
