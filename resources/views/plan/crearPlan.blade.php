@extends('layouts.baseJefe')

@section('titulo','Crear Plan')

@section('contenido')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Plan de Mejoramiento Nº 0000   
            </h1>                        
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form class="form" action="" method="" role="form" name="plan">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label  for="programa">Programa academico</label>
                        <input type="text" name="programa" class="form-control" id="programa" placeholder="Programa academico" disabled="disabled">
                    </div>
                    <div class="form-group col-md-3">
                        <label  for="facultad">Facultad</label>
                        <input type="text" name="facultad" class="form-control" id="faculta" placeholder="Facultad" disabled="disabled">
                    </div>
                    <div class="form-group col-md-3">
                        <label  for="fecha">Fecha de analisis</label>
                        <input type="text" name="fecha" class="form-control" id="fecha" value="{{date('d/m/Y')}}" disabled="disabled">
                    </div>
                    <div class="form-group col-md-3">
                        <label  for="lineamiento">Tipo de lineamiento</label>
                        <select class="form-control" id="lineamiento" name="lineamiento">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="pregrado">Pregrado</option>
                            <option value="postgrado">Postgrado</option>
                            <option value="institucional">Institucional</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label  for="año">Año del proceso de autoevaluación</label>
                        <input type="text" name="anio" class="form-control" id="anio" placeholder="Año">
                    </div>
                    <div class="form-group col-md-6">
                        <label  for="factor">Factor</label>
                        <select class="form-control" id="factor" name="factor">
                          
                        </select>                                    
                    </div>
                    <div class="form-group col-md-3">
                        <label></label>                                    
                        <a href="{{url('caracteristica/create')}}"><button type="button" class="btn btn-success form-control"><span class="glyphicon glyphicon-plus"></span> Agregar caracteristica</button></a>
                    </div> 
                </div>                                                       
            </form>
            <hr>
        </div>   
        <div class="col-md-12">                        
            <table class="table table-bordered">
                <thead>
                  <tr>
                      <td>Factor</td>
                      <td>Caractersitica</td>
                      <td>No Conformidad</td>
                      <td>Causa Raíz</td>
                      <td>Catidad de Actividades</td>
                      <td>Modificar</td>
                      <td>Eliminar</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="7"><center><h1 class="text-muted">No hay factores aún</h1></center></td>
                  </tr>
                </tbody>
            </table>
        </div>                   
        <button tyor="button" class="btn btn-lg btn-success center-block" disabled="disabled"> <span class="glyphicon glyphicon-plus"></span> Crear Plan de Mejoramiento</button>
    </div>

    <script type="text/javascript" src="{{asset('js/dynamicoptionlist.js')}}"></script>   
    

    <script type="text/javascript">
        var makeModel = new DynamicOptionList("lineamiento","factor");
        makeModel.setFormName("plan");

        makeModel.forValue("pregrado").addOptions("Factor1","Factor1.1","Factor1.2"); // Add options if VALUE of option is selected
        makeModel.forValue("postgrado").addOptions("Factor2","Factor2.1","Factor2.2"); // Add options if VALUE of option is selected
        makeModel.forValue("institucional").addOptions("Factor3","Factor3.1","Factor3.2"); // Add options if VALUE of option is selected           

        makeModel.forValue("").addOptionsTextValue("Seleccione un lineamiento",""); // Add options with values different from text*/
    </script>

@stop