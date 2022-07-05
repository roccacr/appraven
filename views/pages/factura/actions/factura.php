<?php include "views/modules/navbar.php"; ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
 <div class="content-wrapper container-xxl p-0">
<?php
if (isset($routesArray[3]) == false) {
  $yourURL = "/factura/consultar";
  echo ("<script>location.href='$yourURL'</script>");
} else {
  $exp = explode("~", $routesArray[3]);
  $routesArray = base64_decode($exp[0]);
  $routesArray2 = base64_decode($exp[1]);
  if (isset($routesArray)) {
    $select = "*";
    $url = "$tbl_facturas?select=*&linkTo=$routesArray2&equalTo=" . $routesArray;
    $method = "GET";
    $fields = array();
    $response = CurlController::request($url, $method, $fields);

  }
}
?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/Factura-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">
  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice.min.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <?php
/* El código anterior está comprobando si el estado de respuesta es 200. */
  if ($response->status == 200) {
   /* Tomando la respuesta de la API y asignándola a la variable . */
    $response = $response->results;
    /* Recorriendo la matriz de respuesta y asignando cada elemento a la variable . */
    foreach ($response as $data) {
      if ($data->$estado_factura == "$estado_fac_var") {
        $arrayData = $data->$xml_firmado_factura;/* Extraemos los datos de la fima y la descodificamos . */
        $xml_string = $data->$xml_factura;
        $xml = simplexml_load_string($xml_string, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml); // convert the XML string to JSON
        $arr = json_decode($json, TRUE);
        $clave_array        = $arr[$clave_xml_factura];
        $CodigoActividad    = $arr[$CodigoActividad_xml_factura];
        $NumeroConsecutivo  = $arr[$NumeroConsecutivo_xml_factura];
        $FechaEmision       = $arr[$FechaEmision_xml_factura];
        $Emisor             = $arr[$Emisor_xml_factura ];
        $Nombre             = $Emisor[$Nombre_xml_factura ];
        $Ubicacion          = $Emisor[$Ubicacion_xml_factura];
        $OtrasSenas         = $Ubicacion[$OtrasSenas_xml_factura];
        $Identificacion     = $Emisor[$Identificacion_xml_factura ];
        $NumeroCedula       = $Identificacion[$NumeroCedula_xml_factura];
        $Receptor           = $arr[$Receptor_xml_factura];
        $Nombre_Receptor    = $Receptor[$Nombre_Receptor_xml_factura];
        $DetalleServicio    = $arr[$DetalleServicio_xml_factura];
        $LineaDetalle       = $DetalleServicio[$LineaDetalle_xml_factura ];
        echo '<div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Estado</h4>
          <div class="alert-body">
          Estado de la factura: ' . $data->$estado_factura . '
          </div>
        </div>';
     
        $llave= $data->$clave_factura;
        $nombre_fichero = $ruta_xmlFactura.$clave_array . '.xml';
        if (file_exists($nombre_fichero)) {
        } else {
          $xml = new DOMDocument('1.0');
          $encode = base64_decode($data->$xml_firmado_factura);
          $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
          $xml->saveXML( $ruta_xmlFactura.$clave_array. '.xml'); // Wrote: 72 bytes
        }
        $select = "*";
        $url = "$tbl_hac_men?select=*&linkTo=$clave_hac_men&equalTo=" . $data->$clave_factura;
        $method = "GET";
        $fields = array();
        $responseMensajeHacienda = CurlController::request($url, $method, $fields);
        if ($responseMensajeHacienda->status == 200) {
          $responseMensajeHaciendaXl = $responseMensajeHacienda->results;
          foreach ($responseMensajeHaciendaXl as $dataMensajeHacienda) {
            if ($dataMensajeHacienda->$mensaje_hac_men == 1) {
              $EstadoHaciendaDescargar=$dataMensajeHacienda->$mensaje_hac_men;
              $claveHaciendaDescargar=$dataMensajeHacienda->$clave_hac_men;

            $nombre_ficheroHacienda = $ruta_xmlMenHacienda . $dataMensajeHacienda->$clave_hac_men . '.xml';
            if (file_exists($nombre_ficheroHacienda)) {
            } else {
              $xml = new DOMDocument('1.0');
              $encode = $dataMensajeHacienda->xml;
              $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
              $xml->saveXML($ruta_xmlMenHacienda .$dataMensajeHacienda->$clave_hac_men . '.xml'); // Wrote: 72 bytes
            }
            }
          }
        }else{
          $EstadoHaciendaDescargar=0;
        }
  ?>
        <div class="content-header row">
        </div>
        <div class="content-body">
          <section class="invoice-preview-wrapper">
            <div class="row invoice-preview">
              <!-- Invoice -->
              <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                  <div class="card-body invoice-padding pb-0">
                    <!-- Header starts -->
                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                      <div>
                        <div class="logo-wrapper">
                        <img width="150px" src="../../../../app-assets/images/logos/image.png">
                          <h3 class="text-dark invoice-logo">Factura</h3>
                        </div>
                        <script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>
                        <p class="card-text mb-25">Consecutivo: <?php echo $NumeroConsecutivo; ?> </p>
                        <p class="card-text mb-25">Emisor: <?php echo $Nombre; ?> </p>
                        <p class="card-text mb-25">Cedula Juridica: <?php echo $NumeroCedula; ?> </p>
                        <p class="card-text mb-25">Direccion: <?php echo  $OtrasSenas; ?> </p>
                        <p class="card-text mb-25">Fecha de emisión: <?php echo  $FechaEmision;; ?> </p>
                      </div>
                      <div class="mt-md-0 mt-2">
                        <h4 class="invoice-title">
                          Clave
                          <span class="invoice-number">#<br><?php echo  $clave_array ?></span>
                        </h4>
                        <img style="float:right;" width="100%" class="mb-60" alt="Código QR" id="codigo">
                                    <script>
                                    const $imagen = document.querySelector("#codigo"),
                                      $boton = document.querySelector("#btnDescargar");
                                    new QRious({
                                      element: $imagen,
                                      value: "https://appraven.appsngs.com/factura/<?php echo $clave_array; ?>", // La URL o el texto
                                      size:110,
                                      backgroundAlpha: 50, // 0 para fondo transparente
                                      foreground: "#000", // Color del QR
                                      level: "H", // Puede ser L,M,Q y H (L es el de menor nivel, H el mayor)
                                    });
                                    $boton.onclick = () => {
                                      const enlace = document.createElement("a");
                                      enlace.href = $imagen.src;
                                      enlace.download = "img.png"
                                      enlace.click();
                                    }
                                    </script>
                      </div>
                    </div>
                    <!-- Header ends -->
                  </div>

                  <hr class="invoice-spacing" />

                  <!-- Address and Contact starts -->
                  <div class="card-body invoice-padding pt-0">
                    <h6 class="mb-2">Facturado a: </h6>
                    <p class="card-text mb-25"> <?php echo  $Nombre_Receptor; ?> </h6>
                    </p>
                  </div>
                  <!-- Address and Contact ends -->

                  <!-- Invoice Description starts -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="py-1"># Linea</th>
                          <th class="py-1">Codigo</th>
                          <th class="py-1">Cantidad</th>
                          <th class="py-1">Detalle</th>
                          <th class="py-1">Precio Unit</th>
                          <th class="py-1">Importe</th>
                          <th class="py-1">Impuesto</th>
                          <th class="py-1">Sub-Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ( $LineaDetalle  as $data) {

                           if($data==1){
                            $codigo       = $LineaDetalle [$codigo_xml_factura];
                            $codigoRest   = $codigo[$codigoRest_xml_factura];
                            $Impuesto     = $LineaDetalle [$Impuesto_xml_factura];
                            $Monto        = $Impuesto[$Monto_xml_factura];
                            ?>
                          <tr>
                            <td class="py-1">
                              <p class="card-text fw-bold mb-25"><?php echo  $LineaDetalle [$NumeroLinea_xml_factura]; ?></p>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $codigoRest; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $LineaDetalle [$Cantidad_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $LineaDetalle [$Detalle_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $LineaDetalle [$PrecioUnitario_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $LineaDetalle [$MontoTotal_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $Monto ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $LineaDetalle [$MontoTotalLinea_xml_factura]; ?></span>
                            </td>
                          </tr>
                         <?php break; 
                         }else{
                          $codigo       = $data [$codigo_xml_factura];
                          $codigoRest   = $codigo[$codigoRest_xml_factura];
                          $Impuesto     = $data [$Impuesto_xml_factura];
                          $Monto        = $Impuesto[$Monto_xml_factura];
                          ?>
                        <tr>
                          <td class="py-1">
                            <p class="card-text fw-bold mb-25"><?php echo  $data [$NumeroLinea_xml_factura]; ?></p>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $codigoRest; ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $data [$Cantidad_xml_factura]; ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $data [$Detalle_xml_factura]; ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $data [$PrecioUnitario_xml_factura]; ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $data [$MontoTotal_xml_factura]; ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $Monto ?></span>
                          </td>
                          <td class="py-1">
                            <span class="fw-bold"><?php echo  $data [$MontoTotalLinea_xml_factura]; ?></span>
                          </td>
                        </tr>

                           <?php }
                       } ?>
                      </tbody>
                    </table>
                  </div>
                  <?php 
                  $ResumenFactura        = $arr[$ResumenFactura_xml_factura];
                  $TotalMercanciasGravadas = $ResumenFactura[$TotalMercanciasGravadas_xml_factura];
                  $TotalGravado = $ResumenFactura[$TotalGravado_xml_factura];
                  $TotalVenta = $ResumenFactura[$TotalVenta_xml_factura];
                  $TotalVentaNeta = $ResumenFactura[$TotalVentaNeta_xml_factura];
                  $TotalImpuesto = $ResumenFactura[$TotalImpuesto_xml_factura];
                  $TotalComprobante = $ResumenFactura[$TotalComprobante_xml_factura];
                  ?>
        <div class="card-body invoice-padding pb-0">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
              <p class="card-text mb-0">
                <span class="fw-bold">Resumen Factura:</span> <span class="ms-75"></span>
              </p>
            </div>
            <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
              <div class="invoice-total-wrapper">
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total Mercancias Gravadas: <?php echo  $TotalMercanciasGravadas   ;?></p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total Gravado: <?php echo  $TotalGravado   ;?></p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total Venta: <?php echo  $TotalVenta   ;?></p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total Venta Neta: <?php echo  $TotalVentaNeta   ;?></p>
                </div>
                <div class="invoice-total-item">
                  <p class="invoice-total-title">Total Impuesto: <?php echo  $TotalImpuesto   ;?></p>
                </div>
                <hr class="my-50" />
                <div class="invoice-total-item">
                  <p class="invoice-total-title">TotalComprobante: <?php echo  $TotalComprobante   ;?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <!-- Invoice Description ends -->
                  <hr class="invoice-spacing" />
                  <!-- Invoice Note starts -->
                  <div class="card-body invoice-padding pt-0">
                    <div class="row">
                      <div class="col-12">
                        <span class="fw-bold">Note:</span>
                        <span>Nota: Fue un placer trabajar con usted y su equipo. Esperamos que nos tengas en cuenta para futuros proyectos freelance. ¡Gracias!</span>
                      </div>
                    </div>
                  </div>
                  <!-- Invoice Note ends -->
                </div>
              </div>
              <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                  <div class="card-body">

                    <a href="<?php echo $ruta_xmlFactura;?><?php echo $clave_array; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="<?php echo $sufix_fac  ;?><?php echo $clave_array; ?>.xml">
                    <i class="fa fa-cloud-download" aria-hidden="true"></i></i>Factura
                    </a>
                     <?php if($EstadoHaciendaDescargar==1){?>
                    <a href="<?php echo $ruta_xmlMenHacienda;?><?php echo $claveHaciendaDescargar; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="<?php echo $sufix_hac_men;?><?php echo $claveHaciendaDescargar; ?>.xml">
                    <i class="fa fa-cloud-download" aria-hidden="true"></i></i> Mensaje Hacienda
                    </a>
                    <?php }?>
                    <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/consultar"><i data-feather='search'></i> Consultar otra factura </a>
                    <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/pdf/<?php echo base64_encode("$tbl_facturas");?>/<?php echo base64_encode($clave_factura);?>/<?php echo base64_encode($llave);?>"><i data-feather='file-text'></i> Generar PDF </a>
                 <?php } else {
                  echo '<div class="alert alert-danger" role="alert">
               <h4 class="alert-heading">Lo sentimos</h4>
               <div class="alert-body">
               No se pede mostrar el resultado por que la factura: ' . $routesArray . ' no esta Aceptada.<br>
               Estado de la Factura : ' . $data->estado . '
               </div>
             </div>'; ?>

                    <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/consultar"> Consultar otra Factura </a>

                <?php }
              }
            } else { ?>
                <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/consultar"> Consultar Factura </a>
              <?php } ?>
                  </div>
                </div>
              </div>
              <!-- /Invoice Actions -->
            </div>
          </section>

          <!-- Send Invoice Sidebar -->
          <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
            <div class="modal-dialog sidebar-lg">
              <div class="modal-content p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                  <h5 class="modal-title">
                    <span class="align-middle">Send Invoice</span>
                  </h5>
                </div>
                <div class="modal-body flex-grow-1">
                  <form>
                    <div class="mb-1">
                      <label for="invoice-from" class="form-label">From</label>
                      <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-1">
                      <label for="invoice-to" class="form-label">To</label>
                      <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                    </div>
                    <div class="mb-1">
                      <label for="invoice-subject" class="form-label">Subject</label>
                      <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                    </div>
                    <div class="mb-1">
                      <label for="invoice-message" class="form-label">Message</label>
                      <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11" placeholder="Message...">
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea>
                    </div>
                    <div class="mb-1">
                      <span class="badge badge-light-dark">
                        <i data-feather="link" class="me-25"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                    </div>
                    <div class="mb-1 d-flex flex-wrap mt-2">
                      <button type="button" class="btn btn-dark me-1" data-bs-dismiss="modal">Send</button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /Send Invoice Sidebar -->

          <!-- Add Payment Sidebar -->
          <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
            <div class="modal-dialog sidebar-lg">
              <div class="modal-content p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                  <h5 class="modal-title">
                    <span class="align-middle">Add Payment</span>
                  </h5>
                </div>
                <div class="modal-body flex-grow-1">
                  <form>
                    <div class="mb-1">
                      <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="amount">Payment Amount</label>
                      <input id="amount" class="form-control" type="number" placeholder="$1000" />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-date">Payment Date</label>
                      <input id="payment-date" class="form-control date-picker" type="text" />
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-method">Payment Method</label>
                      <select class="form-select" id="payment-method">
                        <option value="" selected disabled>Select payment method</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Debit">Debit</option>
                        <option value="Credit">Credit</option>
                        <option value="Paypal">Paypal</option>
                      </select>
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="payment-note">Internal Payment Note</label>
                      <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                    </div>
                    <div class="d-flex flex-wrap mb-0">
                      <button type="button" class="btn btn-dark me-1" data-bs-dismiss="modal">Send</button>
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /Add Payment Sidebar -->

        </div>
        </div>
        </div>
        <!-- END: Content-->