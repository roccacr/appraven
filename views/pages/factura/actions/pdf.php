<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PDF</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../../../app-assets/css/pdf.css">
</head>

<body>

  <?php
  $tabla = isset($routesArray[2]) ? $routesArray[3] : '';
  $tipo  = isset($routesArray[3]) ? $routesArray[4] : '';
  $clave = isset($routesArray[4]) ? $routesArray[5] : '';

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
        if ($data->estado == "Aceptado") {
          $arrayData = $data->$xml_firmado_PDF;
          $xml_string = $data->$xml_PDF;
          $xml = simplexml_load_string($xml_string, "SimpleXMLElement", LIBXML_NOCDATA);
          $json = json_encode($xml); // convert the XML string to JSON
          $arr = json_decode($json, TRUE);
          $clave_array        = $arr[$clave_xml_factura];
          $CodigoActividad    = $arr[$CodigoActividad_xml_factura];
          $NumeroConsecutivo  = $arr[$NumeroConsecutivo_xml_factura];
          $FechaEmision       = $arr[$FechaEmision_xml_factura];
          $Emisor             = $arr[$Emisor_xml_factura];
          $Nombre             = $Emisor[$Nombre_xml_factura];
          $Ubicacion          = $Emisor[$Ubicacion_xml_factura];
          $OtrasSenas         = $Ubicacion[$OtrasSenas_xml_factura];
          $Identificacion     = $Emisor[$Identificacion_xml_factura];
          $NumeroCedula       = $Identificacion[$NumeroCedula_xml_factura];
          $Receptor           = $arr[$Receptor_xml_factura];
          $Nombre_Receptor    = $Receptor[$Nombre_Receptor_xml_factura];
          $DetalleServicio    = $arr[$DetalleServicio_xml_factura];
          $LineaDetalle       = $DetalleServicio[$LineaDetalle_xml_factura];
          $ResumenFactura     = $arr[$ResumenFactura_xml_factura];
          $TotalVenta         = $ResumenFactura[$TotalVenta_xml_factura];
          $TotalVentaNeta     = $ResumenFactura[$TotalVentaNeta_xml_factura];
          $TotalImpuesto      = $ResumenFactura[$TotalImpuesto_xml_factura];
          $TotalComprobante   = $ResumenFactura[$TotalComprobante_xml_factura];
          $TotalDescuentos    = $ResumenFactura[$TotalDescuentos_xml_factura];
          $fech = explode('T', $FechaEmision);
          if ($table == "$tbl_facturas") {
            $select = "*";
            $url = "$tabl_aprovo_fe?select=$json_aprfac_va&linkTo=$clave_aprfac_va&equalTo=" . $key;
            $method = "GET";
            $fields = array();
            $response = CurlController::request($url, $method, $fields);
            if ($response->status == 200) {
              $response = $response->results[0];
              $arrayData_app = $response->$json_aprfac_va;
              $json_app = json_decode($arrayData_app, true);
              $pedido = $json_app['pedido'];
              $receptor = $json_app['receptor'];
              $idAdmCloud = $json_app['idAdmCloud'];
              $telefono = $receptor['telefono'];
              if (empty($receptor['dirEnvio'])) {
                $dirEnvio = 0;
              } else {
                $dirEnvio = $receptor['dirEnvio'];
              }
              $cedula =   $receptor['cedula'];
              $venta =   $json_app['venta'];
              $plazo =   $venta['plazo'];
              if (empty($json_app['vendedor'])) {
                $vendedor = 0;
              } else {
                $vendedor = $json_app['vendedor'];
              }
              if (empty($receptor['nombreComercial'])) {
                $nombreComercial = 0;
              } else {
                $nombreComercial = $receptor['nombreComercial'];
              }
              if (empty($receptor['nombreComercial'])) {
                $nombreComercial = 0;
              } else {
                $nombreComercial = $receptor['nombreComercial'];
              }
            }
          }
          if ($table == "$tbl_creditonotas") {
            $select = "*";
            $url = "$tabl_aprovo_nc?select=$json_aprnc_va&linkTo=$clave_aprnc_va&equalTo=" . $key;
            $method = "GET";
            $fields = array();
            $response = CurlController::request($url, $method, $fields);
            if ($response->status == 200) {
              $response = $response->results[0];
              $arrayData_app = $response->$json_aprfac_va;
              $json_app = json_decode($arrayData_app, true);
              $pedido = $json_app['pedido'];
              $receptor = $json_app['receptor'];
              $idAdmCloud = $json_app['idAdmCloud'];
              $telefono = $receptor['telefono'];
              if (empty($receptor['dirEnvio'])) {
                $dirEnvio = "";
              } else {
                $dirEnvio = $receptor['dirEnvio'];
              }
              $cedula =   $receptor['cedula'];
              $venta =   $json_app['venta'];
              $plazo =   $venta['plazo'];
              if (empty($json_app['vendedor'])) {
                $vendedor ="-";
              } else {
                $vendedor = $json_app['vendedor'];
              }
              if (empty($receptor['nombreComercial'])) {
                $nombreComercial = "-";
              } else {
                $nombreComercial = $receptor['nombreComercial'];
              }
              if (empty($receptor['nombreComercial'])) {
                $nombreComercial ="-";
              } else {
                $nombreComercial = $receptor['nombreComercial'];
              }
            }
          }
  ?>
          <div class="container invoice">
            <div class="invoice-header">
              <div class="row">
                <div class="col-xs-8">
                  <div class="parent">
                    <div class="divuno">
                      <h4><strong>CORPORACIÓN RAVEN</strong></h4>
                      <h7>Cédula Jurídica: 3-101-014445</h7>
                      <br>
                      <h7>Km 6 Autopista Próspero Fernández</h7>
                    </div>
                    <div class="divdos">
                      <h7>San José, Costa Rica</h7>
                      <br>
                      <h7>Telf:(506) 4032-6600 / Fax:(506)2215-1961</h7>
                      <br>
                      <h7>Apartado Postal: 10228-1000 / www.laboratorioraven.com</h7>
                    </div>
                    <div class="divtres"> <img style="float: left;" class="media-object logo" src="../../../app-assets/images/logos/eite.png" /></div>
                  </div>


                </div>
                <script src="https://unpkg.com/qrious@4.0.2/dist/qrious.js"></script>
                <div class="col-xs-4">
                  <div class="media">
                    <div class="mt-md-0 mt-2">
                      <img style="float:right;" width="100%" class="mb-60" alt="Código QR" id="codigo">
                      <script>
                        const $imagen = document.querySelector("#codigo"),
                          $boton = document.querySelector("#btnDescargar");
                        new QRious({
                          element: $imagen,
                          value: "https://appraven.appsngs.com/factura/<?php echo  $key; ?>", // La URL o el texto
                          size: 150,
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
                    <div class="media-left">
                    </div>
                    <ul class="media-body list-unstyled">
                      <li style="  text-align: center; "> <strong>ORIGINAL</strong></li>
                      <li style="text-align: center;  border-width: 2px; border-style: solid; border-color: rgb(10, 10, 10); border-radius: 8px"><br> <strong>FACTURA No.<?php echo $idAdmCloud; ?></strong><br><br></li>
                      <br>
                      <li style="  text-align: center;  border-image: initial; border: 2px solid black;   border-radius: 5px">FECHA</li>
                      <li style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $fech[0]; ?></li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
            <style>

            </style>
            <div class="invoice-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="parent" style="width:900px;">
                    <div class="divpri1" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:16px; height:10px"> &nbsp; &nbsp;<strong>CONTACTO:</strong>-</p><br>
                    </div>
                    <div class="div2pri2" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:16px"> &nbsp; &nbsp;<strong>TELÉFONO:</strong> <?php echo  $telefono; ?> </p><br>
                    </div>
                    <div class="div3pri3" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:16px"> &nbsp; &nbsp;<strong>CJ:</strong> <?php echo $cedula; ?></p><br>
                    </div>
                    <div class="div4pri4" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong><br>
                        <p style="font-size:18px"> CLIENTE: <?php echo $Nombre_Receptor ?></p>
                      </strong></div>
                    <div class="div5pri5" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:18px"> &nbsp; &nbsp;<strong>DIRECCIÓN:</strong> <?php echo  $dirEnvio; ?></p><br>
                    </div>
                    <div class="div6pri6" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"><br> &nbsp; &nbsp;<strong>PLAZO:</strong> <?php echo $plazo; ?></p><br></div>
                    <div class="div7pri7" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"><br> &nbsp; &nbsp;<strong>PEDIDO:</strong> <?php echo $pedido; ?></p><br></div>
                    <div class="div8pri8" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br><strong>
                        <p style="font-size:18px">NOTAS: --</p>
                      </strong>
                    </div>
                    <div class="div9pri9" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><br><strong>
                        <p style="font-size:18px">Exento al: -%</p>
                      </strong>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <div class="invoice-body">
              <div class="panel panel-default">
                <table class="table table-bordered table-condensed" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                  <thead style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                    <tr>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">CANTIDAD</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">CÓDIGO</td>
                      <td class="text-center col-xs-0" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">DESCRIPCIÓN</td>
                      <td class="text-center col-xs-" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">IVA%</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">PRECIO UNITARIO</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">VALOR TOTAL</td>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $impuesto_valor_1  = 0;
                    $impuesto_valor_2  = 0;
                    $impuesto_valor_13 = 0;
                    foreach ($LineaDetalle  as $data) {
                      if ($data == 1) {
                        $Cantidad     = $LineaDetalle[$Cantidad_xml_factura];
                        $comercial    = $LineaDetalle[$codigo_xml_factura];
                        $codigoRest   = $comercial[$codigoRest_xml_factura];
                        $Impuesto     = $LineaDetalle[$Impuesto_xml_factura];
                        $Monto        = $Impuesto[$Monto_xml_factura];
                        $Detelle      = $LineaDetalle[$Detalle_xml_factura];
                        $Unitario     = $LineaDetalle[$PrecioUnitario_xml_factura];
                        $impuesto     = $LineaDetalle[$Impuesto_xml_factura];
                        $tarifa       = $impuesto[$Tarifa_xml_factura];
                        $monto        = $impuesto[$Monto_xml_factura];
                        $TotalL       = $LineaDetalle[$MontoTotalLinea_xml_factura];
                        if ($tarifa == 1) {
                          $impuesto_valor_1  += $monto;
                        }
                        if ($tarifa == 2) {
                          $impuesto_valor_2  += $monto;
                        }
                        if ($tarifa == 13) {
                          $impuesto_valor_13  += $monto;
                        }
                    ?>
                        <tr>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $Cantidad; ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $codigoRest; ?></th>
                          <th class="text-center rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                            <p><?php echo  $Detelle; ?></p>
                          </th>
                          <th hidden class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$3,312.00</th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $tarifa; ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format($Unitario, 2, ".", ","); ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  number_format($TotalL, 2, ".", ","); ?></th>
                        </tr>
                      <?php break;
                      } else {
                        $Cantidad       = $data[$Cantidad_xml_factura];
                        $comercial     = $data[$codigo_xml_factura];
                        $codigoRest     = $comercial[$codigoRest_xml_factura];
                        $Detelle        = $data[$Detalle_xml_factura];
                        $Unitario        = $data[$PrecioUnitario_xml_factura];
                        $TotalL        = $data[$MontoTotalLinea_xml_factura];
                        $impuesto       = $data[$Impuesto_xml_factura];
                        $tarifa         = $impuesto[$Tarifa_xml_factura];
                        $monto          = $impuesto[$Monto_xml_factura];
                        if ($tarifa == 1) {
                          $impuesto_valor_1  += $monto;
                        }
                        if ($tarifa == 2) {
                          $impuesto_valor_2  += $monto;
                        }
                        if ($tarifa == 13) {
                          $impuesto_valor_13  += $monto;
                        }
                      ?>
                        <tr>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $Cantidad; ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $codigoRest; ?></th>
                          <th class="text-center rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                            <p><?php echo  $Detelle; ?></p>
                          </th>
                          <th hidden class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$3,312.00</th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $tarifa; ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format($Unitario, 2, ".", ","); ?></th>
                          <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  number_format($TotalL, 2, ".", ","); ?></th>
                        </tr>
                    <?php }
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="panel panel-default">

            </div>
            <div class="row">

              <div class="invoice-body">
                <div class="parent2" style="width:920px;">
                  <div class="div11" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format($TotalVenta, 2, ".", ","); ?><br>

                    <br><?php echo number_format($TotalDescuentos, 2, ".", ","); ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                 

                    <br><?php echo number_format($impuesto_valor_2, 2, ".", ","); ?>
                    <br>
                    <br><?php echo number_format($impuesto_valor_13, 2, ".", ","); ?>
                    <br>
                    <br><?php echo number_format($impuesto_valor_1, 2, ".", ","); ?>
                    <br>
                  </div>
                  <div class="div12" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                  <div class="div13" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <strong>SUB TOTAL ₡</strong><br>
                    <br><strong>DECUENTO </strong>
                  </div>
                  <div class="div14" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>IVA(*) 2% </strong><br>
                    <br><strong>IVA(*) 13% </strong>
                    <br>
                    <br><strong>IVA() 1% </strong>
                  </div>
                  <div class="div15" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>TOTAL</strong></div>
                  <div class="div16" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format($TotalComprobante, 2, ".", ","); ?> </div>
                  <div class="div17" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                  <div class="div18"> <strong>
                      <p style="font-size:15px"><br>&nbsp; &nbsp;CUENTAS BANCARIAS: </p>
                    </strong>
                    <p style="font-size:15px">&nbsp; &nbsp;Davivienda</p>
                    <p style="font-size:15px"><strong>&nbsp; &nbsp;COLONES: </strong>: &nbsp;&nbsp;CR13010409142212308116</p>
                    <p style="font-size:15px"><strong>&nbsp; &nbsp;DÓLARES: </strong>   &nbsp;&nbsp;CR96010409142212309920</p>
                  </div>
                  <div class="div19"> <strong>
                      <p style=" text-align: right; font-size:15px"><br>FACTURA ELECTRÓNICA: &nbsp; &nbsp; </p>
                    </strong>
                    <p style=" text-align: right;font-size:15px"><?php echo  $NumeroConsecutivo; ?>&nbsp; &nbsp; </p>
                    <strong>
                      <p style="  text-align: right;font-size:15px"><br>CLAVE ELECTRÓNICA: &nbsp; &nbsp; </p>
                    </strong>
                    <p style="  text-align: right;font-size:15px"><?php echo  $clave_array; ?>&nbsp; &nbsp; </p>
                  </div>
                  <div class="div110" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                  <div class="div111" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                  <div class="div112" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                  <div class="div113" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                  <div class="div114" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>HECHO POR</strong> </div>
                  <div class="div115" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>RECIBIDO CONFORME</strong> </div>
                  <div class="div116" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <strong>No. DE CÉDULA</strong></div>
                </div>
                <div class="parent3">
                  <div class="divfinal" style="  text-align: center;"> ***FACTURA***</div>
                </div>
                <hr>
              </div>
            </div>

          </div>

          <!-- partial -->
  <?php }
      }
    }
  } ?>
</body>

</html>
<script src="../../../app-assets/js/scripts/pages/app-invoice-print.min.js?112"></script>