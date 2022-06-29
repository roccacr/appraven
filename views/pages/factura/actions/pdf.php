<!DOCTYPE html>

<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/horizontal-menu-template-dark/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 06:00:00 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Invoice Print - Vuexy - Bootstrap HTML admin template</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
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
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice-print.min.css">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
  <!-- BEGIN: Content-->
  <br>
<br>
<br>
<br>
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="invoice-print p-3">
          <div class="invoice-header d-flex justify-content-between flex-md-row flex-column pb-2">
            <?php
            $tabla = isset($routesArray[3]) ? $routesArray[3] : '';
            $tipo  = isset($routesArray[4]) ? $routesArray[4] : '';
            $clave = isset($routesArray[5]) ? $routesArray[5] : '';
            if ($tabla === '' ||  $tipo === '' || $clave === '') {
              echo '<div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Lo sentimos</h4>
      <div class="alert-body">
      No se pede Generar la factura. Vuelve a intentarlo.<br>
      <a type="button" href="javascript: history.go(-1)" class="btn btn-dark waves-effect waves-float waves-light">Volver</a>
      </div>
    </div>';
            } else {
              $table = base64_decode($tabla);
              $type =  base64_decode($tipo);
              $key = base64_decode($clave);
              $select = "*";
              $url = "$table?select=*&linkTo=$type&equalTo=" . $key;
              $method = "GET";
              $fields = array();
              $response = CurlController::request($url, $method, $fields);
              if ($response->status == 200) {
                $response = $response->results;
                foreach ($response as $data) {
                  if ($data->estado == "Aceptada") {
                    $arrayData = $data->$xml_firmado_PDF;
                    $xml_string = $data->$xml_PDF;
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


            ?>
                 <div>
                      <div class="d-flex mb-1">
                        <img width="150px" src="../../../../app-assets/images/logos/image.png">
                        <h3 class="text-primary fw-bold ms-1"></h3>
                      </div>
                      <br>
                      <br>
                      <br>
                      <hr class="my-2" />
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
                        <?php
                        if($table=="creditonotas"){
                          $urlap="credito";
                        }else{
                          $urlap="factura";
                        }
                        ?>
                        <img style="float:right;" class="mb-15" alt="Código QR" id="codigo">
                        <script>
                                    const $imagen = document.querySelector("#codigo"),
                                      $boton = document.querySelector("#btnDescargar");
                                    new QRious({
                                      element: $imagen,
                                      value: "https://appraven.appsngs.com/<?php echo $urlap;?>/<?php echo $clave_array; ?>", // La URL o el texto
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

          <hr class="my-2" />

          <div class="card-body invoice-padding pt-0">
            <h6 class="mb-2">Facturado a: </h6>
            <h6 class="card-text mb-25"> <?php echo  $Nombre_Receptor; ?> </h6>
            </p>
          </div>

          <div class="table-responsive mt-2">
            <table class="table m-0">
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
                          $codigo       = $data[$codigo_xml_factura];
                          $codigoRest   = $codigo[$codigoRest_xml_factura];
                          $Impuesto     = $data[$Impuesto_xml_factura];
                          $Monto        = $Impuesto[$Monto_xml_factura];
                          ?>
                      <tr>
                            <td class="py-1">
                              <p class="card-text fw-bold mb-25"><?php echo  $data[$NumeroLinea_xml_factura]; ?></p>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $codigoRest; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data[$Cantidad_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data[$Detalle_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data[$PrecioUnitario_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data[$MontoTotal_xml_factura]; ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $Monto ?></span>
                            </td>
                            <td class="py-1">
                              <span class="fw-bold"><?php echo  $data[$MontoTotalLinea_xml_factura]; ?></span>
                            </td>
                          </tr>
                        <?php } ?>
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
      <span
        >Autorizado mediante la resolución DGT-R-033-2019 del veinte de junio de dos mil diecinueve de la Dirección General de Tributación.</span
      >
    </div>
  </div>
</div>
<!-- Invoice Note ends -->
</div>
</div>
  <!-- END: Content-->
<?php }
                }
              }
            } ?>

<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.min.js"></script>
<script src="../../../app-assets/js/core/app.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/app-invoice-print.min.js?123"></script>
<!-- END: Page JS-->

<script>
  $(window).on('load', function() {
    if (feather) {
      feather.replace({
        width: 14,
        height: 14
      });
    }
  })
</script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/horizontal-menu-template-dark/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 06:00:01 GMT -->

</html>