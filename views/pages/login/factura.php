
<?php
   require './variables_globales/variables.php';
if (isset($routesArray[2]) == false) {

} else {
  $exp = explode("~", $routesArray[2]);
  $routesArray = $exp[0];

  if (isset($routesArray)) {
    $select = "*";
    $url = "facturas?select=*&linkTo=clave&equalTo=" . $routesArray;
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
  <!-- END: Vendor CSS-->

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
  if ($response->status == 200) {
    $response = $response->results;
    foreach ($response as $data) {
      if ($data->estado == "Aceptada") {
        $arrayData = $data->xml_firmado;
        $xml_string = $data->xml;
        $xml = simplexml_load_string($xml_string, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml); // convert the XML string to JSON
        $arr = json_decode($json, TRUE);
       
        $clave_array        = $arr['Clave'];
        $CodigoActividad        = $arr['CodigoActividad'];
        $NumeroConsecutivo  = $arr['NumeroConsecutivo'];
        $FechaEmision       = $arr['FechaEmision'];
        $Emisor             = $arr['Emisor'];
        $Nombre             = $Emisor['Nombre'];
        $Ubicacion          = $Emisor['Ubicacion'];
        $OtrasSenas         = $Ubicacion['OtrasSenas'];
        $Identificacion     = $Emisor['Identificacion'];
        $NumeroCedula       = $Identificacion['Numero'];
        $Receptor           = $arr['Receptor'];
        $Nombre_Receptor    = $Receptor['Nombre'];
        $DetalleServicio    = $arr['DetalleServicio'];
        $LineaDetalle       = $DetalleServicio['LineaDetalle'];
        echo '<div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Estado</h4>
          <div class="alert-body">
          Estado de la factura: ' . $data->estado . '
          </div>
        </div>';

        $nombre_fichero = 'views/xmlFactura/FE-' . $clave_array . '.xml';
        if (file_exists($nombre_fichero)) {
        } else {
          $xml = new DOMDocument('1.0');
          $encode = base64_decode($data->xml_firmado);
          $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
          $xml->saveXML('views/xmlFactura/FE-' . $clave_array . '.xml'); // Wrote: 72 bytes
        }
        $select = "*";
        $url = "haciendamensajes?select=*&linkTo=clave&equalTo=" . $data->clave;
        $method = "GET";
        $fields = array();
        $responseMensajeHacienda = CurlController::request($url, $method, $fields);
        if ($responseMensajeHacienda->status == 200) {
          $responseMensajeHaciendaXl = $responseMensajeHacienda->results;
          foreach ($responseMensajeHaciendaXl as $dataMensajeHacienda) {
            if ($dataMensajeHacienda->mensaje == 1) {
                $EstadoHaciendaDescargar=$dataMensajeHacienda->mensaje;
                $claveHaciendaDescargar=$dataMensajeHacienda->clave;

              $nombre_ficheroHacienda = 'views/xmlMenHacienda/RMH-' . $dataMensajeHacienda->clave . '.xml';
              if (file_exists($nombre_ficheroHacienda)) {
              } else {
                $xml = new DOMDocument('1.0');
                $encode = $dataMensajeHacienda->xml;
                $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
                $xml->saveXML('views/xmlMenHacienda/RMH-' . $dataMensajeHacienda->clave . '.xml'); // Wrote: 72 bytes
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
                        <p class="card-text mb-25">Fecha de emisión: <?php echo  $FechaEmision; ?> </p>
                        <p class="card-text mb-25">Actividad Economica: <?php echo $CodigoActividad; ?> </p>
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
                            $codigo = $data['CodigoComercial'];
                            $codigoRest = $codigo['Codigo'];
                            $Impuesto = $data['Impuesto'];
                            $Monto     = $Impuesto['Monto'];
                            ?>
                          <tr>
                            <td class="py-1">
                              <p class="card-text fw-bold mb-25"><?php echo  $data['NumeroLinea']; ?></p>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $codigoRest; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data['Cantidad']; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data['Detalle']; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data['PrecioUnitario']; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data['MontoTotal']; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $Monto ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data['MontoTotalLinea']; ?></span>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    </div>
        
    
       <?php 
       $ResumenFactura        = $arr['ResumenFactura'];
       $TotalMercanciasGravadas = $ResumenFactura['TotalMercanciasGravadas'];
       $TotalGravado = $ResumenFactura['TotalGravado'];
       $TotalVenta = $ResumenFactura['TotalVenta'];
       $TotalVentaNeta = $ResumenFactura['TotalVentaNeta'];
       $TotalImpuesto = $ResumenFactura['TotalImpuesto'];
       $TotalComprobante = $ResumenFactura['TotalComprobante'];
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
              <span
                >Autorizado mediante la resolución DGT-R-033-2019 del veinte de junio de dos mil diecinueve de la Dirección General de Tributación.</span
              >
            </div>
          </div>
        </div>
        <!-- Invoice Note ends -->
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->

              <!-- Invoice Actions -->
              <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                  <div class="card-body">

                    <a href="views/xmlFactura/FE-<?php echo $clave_array; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="FE-<?php echo $clave_array; ?>.xml">
                  <i data-feather='download-cloud'></i>Factura
                    </a>
                     <?php if($EstadoHaciendaDescargar==1){?>
                    <a href="views/xmlMenHacienda/RMH-<?php echo $claveHaciendaDescargar; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="RMH-<?php echo $claveHaciendaDescargar; ?>.xml">
                    <i data-feather='download-cloud'></i> Mensaje Hacienda
                    </a>
                    <?php }?>

                    <a class="btn btn-outline-secondary w-100 mb-75" href="/pdf/<?php echo base64_encode("$tbl_facturas");?>/<?php echo base64_encode($clave_factura);?>/<?php echo base64_encode($routesArray);?>"><i data-feather='file-text'></i> Generar PDF </a>
                 <?php } else {
                  echo '<div class="alert alert-danger" role="alert">
               <h4 class="alert-heading">Lo sentimos</h4>
               <div class="alert-body">
               No se pede mostrar el resultado por que la factura: ' . $routesArray . ' no esta Aceptada.<br>
               Estado de la Factura : ' . $data->estado . '
               </div>
             </div>'; ?>
                <?php }
              }
            } else {
              echo '<div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Lo sentimos</h4>
              <div class="alert-body">
             No se encontro la factura solicitada: '.$routesArray.'
              </div>
            </div>';?>
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