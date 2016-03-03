@if (session('message') == 'ok')
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>En hora buena!</strong> Registro exitoso.
  </div>
@elseif (session('message') == 'error')
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Ups!</strong> El registro ya existe, intenta con otro nombre.
  </div>
@elseif (session('message') == 'editado')
  <div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>En hora buena!</strong> El registro se ha modificado correctamente.
  </div>
@elseif (session('message') == 'eliminado')
  <div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>En hora buena!</strong> El registro se ha eliminado correctamente.
  </div>
@endif

<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
        });
    }, 3000);
</script>