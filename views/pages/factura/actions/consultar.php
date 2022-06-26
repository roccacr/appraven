<?php
/* Variable que se utiliza para almacenar el nombre de la columna que se va a utilizar para consultar
la base de datos. */
$select = "$consultarFacturas_permiso_va";
/* Creación de una URL para consultar la base de datos sobre los permisos del usuario. */
$url = "$tbl_permisos?select=".$select."&linkTo=$id_user_va&equalTo=". $_SESSION["admin"]->$id_user_va;
$method = "GET";
/* Una matriz vacía. */
$fields = array();
/* Realizar una solicitud al servidor para obtener los permisos del usuario. */
$responsepermisos = CurlController::request($url,$method,$fields);
/* Verificando si la respuesta del servidor es 200, lo que significa que la solicitud fue exitosa. */
if($responsepermisos->status == 200){
/* Obtener los resultados de la respuesta. */
  $permiso= $responsepermisos->results;
 /* Recorriendo los resultados de la consulta. */
  foreach ($permiso as $data) {
/* Comprobando si el usuario tiene permiso para ver la página. */
 if ($data->$consultarFacturas_permiso_va==1){
/* Comprobando si el formulario ha sido enviado. */
if (isset($_POST["clave"]) || isset($_POST["transaccion"]) || isset($_POST["customOptionsCheckableRadios"])) {
/* Comprobando si el botón de radio está marcado o no. */
  $factura = isset($_POST['customOptionsCheckableRadios']) ? "checked" : "unchecked";
/* Comprobando si el botón de radio está marcado o no. */
  if ($factura === "unchecked") {
    echo '<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    Se debe seleccionar un tipo de factura para realizar la consulta, inténtalo de nuevo.
    </div>
  </div>';
  }
/* Comprobando si el botón de radio está marcado. */
  if ($factura === "checked") {
    $valor = $_POST['customOptionsCheckableRadios'];
  /* Verificando si el valor del botón de radio es factura, si lo es, establece la tabla en facturas,
  la clave en el valor de la entrada de clave y el tipoValor en Factura. */
    if ($valor == "factura") {
      $tabla = $tbl_facturas;
      $clave = $_POST["clave"];
      $tipoValor = "Factura";
    }/* Al verificar si el botón de opción no está marcado, si no está marcado, establecerá la tabla en
    creditonotas, la clave en el valor de la entrada clave y el tipoValor en Nota de crédito. */
     else {
      $tabla = $tbl_creditonotas;
      $clave = $_POST["clave"];
      $tipoValor = "Nota de Credito";
    }
    $select = "*";
     /* Crear una URL para consultar la base de datos. */
    $url = "$tabla?select=*&linkTo=$clave_factura&equalTo=" . $clave;
    $method = "GET";
    $fields = array();
    $response = CurlController::request($url, $method, $fields);
  /* Verificando si la respuesta del servidor es 200, lo que significa que la solicitud fue exitosa. */
    if ($response->status == 200) {
    /* Obtener los resultados de la respuesta. */
      $response = $response->results;
   /* Recorriendo la respuesta del servidor. */
      foreach ($response as $data) {
        if ($valor == "factura") {
          /* Redirigir a otra página. */
          $yourURL = "/factura/factura/".base64_encode($clave)."~".$_SESSION["admin"]->$token_user_va;
          echo ("<script>location.href='$yourURL'</script>");

        }else{
          $yourURL = "/factura/credito/".base64_encode($clave)."~".$_SESSION["admin"]->$token_user_va;
          echo ("<script>location.href='$yourURL'</script>");
        }
      }
    }else{
      echo '<div class="alert alert-danger" role="alert">
     <h4 class="alert-heading">Factura</h4>
     <div class="alert-body">
      No se encontro  ninguna factura con la clave : ' . $clave . ' ,  Tipo de transaccion : ' .  $tipoValor . ' Intentalo de nuevo 
    </div>
  </div>';
    }
  }
}?>
<section id="floating-label-input">
  <form method="post" class="needs-validation" novalidate enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Buscar Facturas</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 mb-1">
                <p>
                  Ingrese la clave de la factura <code>#000000000</code> Seguido del
                  <code>#numero de Transaccion</code>
                </p>
              </div>
              <div class="col-sm-6 col-12 mb-1 mb-sm-0">
                <div class="form-floating">
                  <input type="number" class="form-control" id="floating-label1" name="clave" placeholder="Clave" onchange="validateJS(event, 'email')" required>
                  <label for="floating-label1">Clave</label>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor rellene este campo.</div>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="form-floating">
                  <input type="number" class="form-control" id="floating-label-disable" name="transaccion" placeholder="# Transaccion" onchange="validateJS(event, 'email')" required>
                  <label for="floating-label-disable"># Transaccion</label>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor rellene este campo.</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tipo de Factura</h4>
              </div>
              <div class="card-body">
                <div class="row custom-options-checkable g-1">
                  <div class="col-md-6">
                    <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios1" value="factura">
                    <label class="custom-option-item p-1" for="customOptionsCheckableRadios1">
                      <span class="d-flex justify-content-between flex-wrap mb-50">
                        <span class="fw-bolder">Factura</span>
                        <span class="fw-bolder">#0000</span>
                      </span>
                      <small class="d-block">Buscar facturas electrónica</small>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <input class="custom-option-item-check" type="radio" name="customOptionsCheckableRadios" id="customOptionsCheckableRadios2" value="notaCredito">
                    <label class="custom-option-item p-1" for="customOptionsCheckableRadios2">
                      <span class="d-flex justify-content-between flex-wrap mb-50">
                        <span class="fw-bolder">Nota Credito</span>
                        <span class="fw-bolder">#0000</span>
                      </span>
                      <small class="d-block">Buscar #notas de Crédito</small>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-outline-dark waves-effect">Buscar</button>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
  </form>
</section>

<script>
  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
  }
</script>
<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<!-- END: Page Vendor JS-->
<script src="../../../app-assets/formulario/form.js?123">

</script>


<?php 
  ?>
<!-- 
//permisos fin -->
  <?php /* Comprobando si el usuario tiene permiso para ver la página. */
  }else{
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
     No tienes permisos para ver esta vista, consulta con el administrador del sitio.
    </div>
  </div>';
}
 }
/* Una llave de cierre para la instrucción `if (->status == 200){`. */
}else{
   echo '<div class="alert alert-danger" role="alert">
   <h4 class="alert-heading">Lo sentimos</h4>
   <div class="alert-body">
   Todavía no tienes permisos para ver esta vista, consulta con el administrador del sitio.
   </div>
 </div>';
}?>