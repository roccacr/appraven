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
    $url = "facturas?select=*&linkTo=$routesArray2&equalTo=" . $routesArray;
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

        $nombre_fichero = 'views/xmlFactura/' . $clave_array . '.xml';
        if (file_exists($nombre_fichero)) {
        } else {
          $xml = new DOMDocument('1.0');
          $encode = base64_decode($data->xml_firmado);
          $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
          $xml->saveXML('views/xmlFactura/' . $clave_array . '.xml'); // Wrote: 72 bytes
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

              $nombre_ficheroHacienda = 'views/xmlMenHacienda/' . $dataMensajeHacienda->clave . '.xml';
              if (file_exists($nombre_ficheroHacienda)) {
              } else {
                $xml = new DOMDocument('1.0');
                $encode = $dataMensajeHacienda->xml;
                $xml = simplexml_load_string($encode, "SimpleXMLElement", LIBXML_NOCDATA);
                $xml->saveXML('views/xmlMenHacienda/' . $dataMensajeHacienda->clave . '.xml'); // Wrote: 72 bytes
              }
            }
          }
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
                          <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                              <linearGradient id="invoice-linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                <stop stop-color="#000000" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                              </linearGradient>
                              <linearGradient id="invoice-linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                              </linearGradient>
                            </defs>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-400.000000, -178.000000)">
                                <g transform="translate(400.000000, 178.000000)">
                                  <path class="text-dark" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                  <path d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#invoice-linearGradient-1)" opacity="0.2"></path>
                                  <polygon fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                  <polygon fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                  <polygon fill="url(#invoice-linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                </g>
                              </g>
                            </g>
                          </svg>
                          <h3 class="text-dark invoice-logo">Factura</h3>


                        </div>
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
                        <?php foreach ($LineaDetalle as $data) {
                          $codigo = $data['Codigo'];
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
              <!-- /Invoice -->

              <!-- Invoice Actions -->
              <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                  <div class="card-body">

                    <a href="views/xmlFactura/<?php echo $clave_array; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="<?php echo $clave_array; ?>.xml">
                    <i data-feather='download-cloud'></i> Factura
                    </a>
                     <?php if($EstadoHaciendaDescargar==1){?>
                    <a href="views/xmlMenHacienda/RMH-<?php echo $claveHaciendaDescargar; ?>.xml" class="btn btn-outline-secondary w-100 btn-download-invoice mb-75" download="RMH-<?php echo $claveHaciendaDescargar; ?>.xml">
                    <i data-feather='download-cloud'></i>  Mensaje Hacienda
                    </a>
                    <?php }?>

                    <a class="btn btn-outline-secondary w-100 mb-75" href="/factura/consultar"><i data-feather='search'></i> Consultar otra factura </a>
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