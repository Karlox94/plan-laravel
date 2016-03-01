@extends('layouts.baseJefe')

@section('titulo','Agregar Caracteristica')

@section('contenido')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Plan de Mejoramiento Nº 0000 <br>
                <small> Agregar Caracteristica</small>
            </h1>                        
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">                     
            <form class="form" role="form" name="plan">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label  for="factor">Factor</label>
                        <input type="text" name="factor" class="form-control" id="factor" placeholder="Factor escogido anteriormente">
                    </div>
                    <div class="form-group col-md-4">
                        <label  for="caracterisitca">Caracteristica</label>
                        <select class="form-control" id="caractersitica" name="caracteristica">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="car1">Caracteristica 1</option>
                            <option value="car2">Caracteristica 2</option>
                            <option value="car3">Caracteristica 3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label  for="origen">Origen</label>
                        <input type="text" name="origen" class="form-control" id="origen" value="Autoevaluacion" disabled="disable">
                    </div>
                    <div class="form-group col-md-12 ">
                        <label  for="debilidad">Debilidad / Oportunidad de Mejora</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-7">
                        <label  for="causaRaiz">Causa Raíz <small class="text-muted"> (Adjuntar metodología para su identificación)</small></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Adjuntar Metodología</label>                                   
                                <input type="file"  value="Adjuntar Metodología">
                            </div>                           
                            <div class="form-group col-md-12">
                                <label  for="tipoAccion">Tipo de Acción</label>
                                <select class="form-control" id="tipoAccion" name="tipoAccion">
                                    <option selected="selected" value="">Seleccione una opción</option>
                                    <option value="corrrectiva">Acción Correctiva</option>
                                    <option value="preventiva">Acción Preventiva</option>
                                    <option value="mejora">Acción de Mejora</option>
                                </select>
                            </div>
                        </div>                                    
                    </div>
                    <div class="form-group col-md-3">
                        <label>Actividades</label>                                   
                        <a href="javascript:;" class="forget btn btn-success form-control" data-toggle="modal" data-target=".forget-modal"><span class="glyphicon glyphicon-plus"></span> Agregar actividad</a>
                    </div>                                 
                </div>                                                       
            </form>
            <table class="table table-bordered col-md-12">
                <thead>
                  <tr>
                      <td>Actividad</td>
                      <td>Meta</td>
                      <td>Indicador</td>
                      <td>Fecha incio</td>
                      <td>Fecha fin</td>
                      <td>Responsable</td>
                      <td>Modificar</td>
                      <td>Eliminar</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="8"><center><h1 class="text-muted">No hay actividades aún</h1></center></td>
                  </tr>
                </tbody>
            </table>
            <button tyor="button" class="btn btn-lg btn-success center-block" disabled="disabled"> <span class="glyphicon glyphicon-plus"></span> Crear Caracteristica</button>
        </div>
    </div>
    <!-- /.row -->                    

    </div>
<!-- /.container-fluid -->

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title">Agregar Actividad</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="actividad">Actividad</label>
                        <textarea class="form-control" id="actividad" rows="5" placeholder="¿Qué Hacer para eliminar la Causa Raíz y dar solución al problema?"></textarea> 
                    </div> 
                    <div class="col-md-6 form-group">
                        <label for="meta">Meta</label>
                        <input type="text" name="meta" class="form-control" id="meta" placeholder="Resultado cuantitativo que se pretende alcanzar">                                      
                    </div>  
                    <div class="col-md-6 form-group">                      
                        <label for="indicador">Indicador</label>
                        <input type="text" name="indicador" class="form-control" id="indicador" placeholder="Permite medir el logro de la Meta">  
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="fechaInicio">Fecha inicio de ejecución</label>
                        <input type="date" name="fechaInicio" class="form-control" id="fechaIncio">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="fechaFinal">Fecha final de ejecución</label>
                        <input type="date" name="fechaFinal" class="form-control" id="fechaFinal">
                    </div>
                    <div class="col-md-12  checkbox form-group">
                        <label>
                            <input type="checkbox" value="" id="validarRecursos" onchange="mostrarRecursos();">
                            Recusos
                        </label>
                    </div>
                    <div class="recursos" id="recursos">
                        <div class="col-md-12 form-group">                                    
                            <h4 for="recursos" class="text-center">Descripción de los recursos</h4>
                        </div>
                        <div class="col-md-6 form-group">  
                            <label for="personal">Personal</label>                                  
                            <input type="text" name="personal" class="form-control" id="personal">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteP" name="fuenteP">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total">Total</label>                                  
                            <input type="text" name="totalP" class="form-control" id="totalP" placeholder="Costo ($)">
                        </div>
                        <div class="col-md-6 form-group">  
                            <label for="equipo">Equipo</label>                                  
                            <input type="text" name="equipo" class="form-control" id="equipo">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteE" name="fuenteE">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total">Total</label>                                  
                            <input type="text" name="totalE" class="form-control" id="totalE" placeholder="Costo ($)">
                        </div>                                
                        <div class="col-md-6 form-group">  
                            <label for="materiales">Materiales e Insumos</label>                                  
                            <input type="text" name="personal" class="form-control" id="personal">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteM" name="fuentem">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total form-group">Total</label>                                  
                            <input type="text" name="totalM" class="form-control" id="totalM" placeholder="Costo ($)">
                        </div>                                
                        <div class="col-md-6 form-group">  
                            <label for="servicio">Servicio técnico</label>                                  
                            <input type="text" name="servicio" class="form-control" id="servicio">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteS" name="fuenteS">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total">Total</label>                                  
                            <input type="text" name="totalP" class="form-control" id="totalS" placeholder="Costo ($)">
                        </div>
                        <div class="col-md-6 form-group">  
                            <label for="infra">Infraestructura</label>                                  
                            <input type="text" name="infra" class="form-control" id="infra">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteI" name="fuenteI">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total">Total</label>                                  
                            <input type="text" name="totalI" class="form-control" id="totalI" placeholder="Costo ($)">
                        </div>
                        <div class="col-md-6 form-group">  
                            <label for="admin">Administración</label>                                  
                            <input type="text" name="admin" class="form-control" id="admin">
                        </div> 
                        <div class="col-md-3 form-group">                   
                            <label for="fuente">Fuente</label>                                  
                            <select class="form-control" id="fuenteAd" name="fuenteAd">
                                <option selected="selected" value="">Seleccione una opción</option>
                                <option value="interna">Interna</option>
                                <option value="externa">Externa</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="total">Total</label>                                  
                            <input type="text" name="totalAd" class="form-control" id="totalAd" placeholder="Costo ($)">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-offset-3 form-group">                   
                        <label for="responsable">Responsable</label>                                  
                        <select class="form-control" id="responsable" name="responsable">
                            <option selected="selected" value="">Seleccione una opción</option>
                            <option value="persona1">Persona1</option>
                            <option value="persona2">Persona2</option>
                            <option value="persona3">Persona3</option>
                            <option value="persona4">Persona4</option>
                        </select>
                    </div>                                
                </div>                                
            </div>                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Agregar</button>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<script type="text/javascript">
        function mostrarRecursos() {
            element = document.getElementById("recursos");
            check = document.getElementById("validarRecursos");
            if (check.checked) {
                element.style.display='block';
            }
            else {
                element.style.display='none';
            }
        }
    </script>

@stop