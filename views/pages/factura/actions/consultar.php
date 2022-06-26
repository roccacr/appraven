
<?php

$select = "consultarFacturas_permiso";
$url = "permisos?select=".$select."&linkTo=id_user&equalTo=". $_SESSION["admin"]->id_user;
$method = "GET";
$fields = array();
$responsepermisos = CurlController::request($url,$method,$fields);
if($responsepermisos->status == 200){
  $permiso= $responsepermisos->results;
  foreach ($permiso as $data) {
 if ($data->consultarFacturas_permiso==1){

if (isset($_POST["clave"]) || isset($_POST["transaccion"]) || isset($_POST["customOptionsCheckableRadios"])) {
  $factura = isset($_POST['customOptionsCheckableRadios']) ? "checked" : "unchecked";
  if ($factura === "unchecked") {
    echo '<div class="alert alert-warning" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    Se debe seleccionar un tipo de factura para realizar la consulta, inténtalo de nuevo.
    </div>
  </div>';
 
  }
  if ($factura === "checked") {
    $valor = $_POST['customOptionsCheckableRadios'];
    if ($valor == "factura") {
      $tabla = "facturas";
      $clave = $_POST["clave"];
      $tipoValor = "Factura";
    } else {
      $tabla = "creditonotas";
      $clave = $_POST["clave"];
      $tipoValor = "Nota de Credito";
    }
    $select = "*";
    $url = "$tabla?select=*&linkTo=clave&equalTo=" . $clave;
    $method = "GET";
    $fields = array();
    $response = CurlController::request($url, $method, $fields);
    if ($response->status == 200) {
      $response = $response->results;
?>

      <div class="row" id="basic-table">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Resultado de la busqueda</h4>
            </div>
            <div class="card-body">
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Clave</th>
                    <th>Subsidiaria</th>
                    <th>Fecga de creacion</th>
                    <th>estado</th>
                    <th>Fecga de Modificaion</th>
                    <th>id Netsuite</th>
                    <th>xml Firmado</th>
                    <th>Total Netsuite</th>
                    <th>usuario</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($response as $data) {
                    if ($valor == "factura") {
                  ?>
                      <tr>
                        <td><span class="fw-bold"><?php echo $data->clave; ?></span>
                        </td>
                        <td><?php echo $data->subsidiaria; ?></td>
                        <td><?php echo $data->xml; ?> </td>
                        <td><span class="badge rounded-pill badge-light-warning me-1"><?php echo $data->estado; ?></span></td>
                        <td><?php echo $data->fecha_ultima_modificacion; ?> </td>
                        <td><?php echo $data->id_netsuite; ?> </td>
                        <td><?php echo $data->xml_firmado; ?></td>
                        <td><?php echo $data->total_netsuite; ?> </td>
                        <td><?php echo $data->usuario; ?></td>
                      </tr>
                    <?php
                    }else{ ?>
                    <tr>
                      <td><span class="fw-bold"><?php echo $data->clave; ?></span>
                      </td>
                      <td><?php echo $data->subsidiaria; ?></td>
                      <td><?php echo $data->xml; ?> </td>
                      <td><span class="badge rounded-pill badge-light-warning me-1"><?php echo $data->estado; ?></span></td>
                      <td><?php echo $data->fecha_creacion; ?> </td>
                      <td><?php echo $data->fecha_ultima_modificacion; ?> </td>
                      <td><?php echo $data->id_netsuite; ?></td>
                      <td><?php echo $data->xml_firmado; ?> </td>
                      <td><?php echo $data->usuario; ?></td>
                    </tr>
                  <?php
                } } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
<?php } else {
      echo '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Factura</h4>
            <div class="alert-body">
              No se encontro  ninguna factura con la clave : ' . $clave . ' ,  Tipo de transaccion : ' .  $tipoValor . ' Intentalo de nuevo 
            </div>
          </div>';
    }
  }
} ?>

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
<?php }else{
     echo '<div class="alert alert-danger" role="alert">
     <h4 class="alert-heading">Lo sentimos</h4>
     <div class="alert-body">
      No tienes permisos para ver esta vista, consulta con el administrador del sitio.
     </div>
   </div>';
}
  }
}else{
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    Todavía no tienes permisos para ver esta vista, consulta con el administrador del sitio.
    </div>
  </div>';
}?>
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