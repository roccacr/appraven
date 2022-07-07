<link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice-print.min.css">
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
</head>
</style>
<style>
  .parent {
    display: grid;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
  }

  .div1 {
    grid-area: 1 / 12 / 2 / 13;
  }

  .div2 {
    grid-area: 1 / 11 / 2 / 12;
  }

  .div3 {
    grid-area: 2 / 12 / 4 / 13;
  }

  .div4 {
    grid-area: 2 / 11 / 4 / 12;
  }

  .div5 {
    grid-area: 1 / 1 / 2 / 11;
  }

  .div6 {
    grid-area: 2 / 1 / 3 / 11;
  }

  .div7 {
    grid-area: 3 / 1 / 4 / 4;
  }

  .div8 {
    grid-area: 3 / 4 / 4 / 7;
  }

  .div9 {
    grid-area: 3 / 7 / 4 / 11;
  }

  .div90 {
    grid-area: 4 / 1 / 5 / 11;
  }

  .div101 {
    grid-area: 4 / 11 / 5 / 13;
  }
</style>

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
  <br>
  <br>
  <br>
  <br>
  <div class="content-header row">
  </div>
  <div class="content-body">
    <div class="invoice-print p-3">
      <div class="invoice-header d-flex justify-content-between flex-md-row flex-column pb-2">
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
          <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
          <link rel="stylesheet" href="../../../app-assets/css/pdf.css">

        </head>

        <body>
        <?php
            $tabla = isset($routesArray[2]) ? $routesArray[2] : '';
            $tipo  = isset($routesArray[3]) ? $routesArray[3] : '';
            $clave = isset($routesArray[4]) ? $routesArray[4] : '';

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
                    $ResumenFactura        = $arr[$ResumenFactura_xml_factura];
                    $TotalVenta          = $ResumenFactura[$TotalVenta_xml_factura];
                    $TotalVentaNeta = $ResumenFactura[$TotalVentaNeta_xml_factura];
                    $TotalImpuesto = $ResumenFactura[$TotalImpuesto_xml_factura];
                    $TotalComprobante = $ResumenFactura[$TotalComprobante_xml_factura];
                    $TotalDescuentos          = $ResumenFactura["TotalDescuentos"];





                    $fech=explode( 'T', $FechaEmision ) ;
                    if($table=="$tbl_facturas"){
                      $select = "*";
                      $url = "$tabl_aprovo_fe?select=$json_aprfac_va&linkTo=$clave_aprfac_va&equalTo=" . $key;
                      $method = "GET";
                      $fields = array();
                      $response = CurlController::request($url, $method, $fields);
                      if ($response->status == 200) {
                        $response = $response->results[0];
                        $arrayData_app = $response->$json_aprfac_va;
                        $json_app =json_decode($arrayData_app, true);
                        $vendedor= $json_app['vendedor'];
                        $pedido= $json_app['pedido'];
                        $receptor = $json_app['receptor'];
                        $idAdmCloud = $json_app['idAdmCloud'];
                        $nombreComercial = $receptor['nombreComercial'];
                        $telefono = $receptor['telefono'];
                        $dirEnvio = $receptor['dirEnvio'];
                        $cedula =   $receptor['cedula'];
                        $venta =   $json_app['venta'];
                        $plazo =   $venta['plazo'];
                      }

                      }
                      if($table=="$tbl_creditonotas"){
                        $select = "*";
                        $url = "$tabl_aprovo_nc?select=$json_aprnc_va&linkTo=$clave_aprnc_va&equalTo=" . $key;
                        $method = "GET";
                        $fields = array();
                        $response = CurlController::request($url, $method, $fields);
                      if ($response->status == 200) {
                        $response = $response->results[0];
                        $arrayData_app = $response->$json_aprfac_va;
                        $json_app =json_decode($arrayData_app, true);
                        $vendedor= $json_app['vendedor'];
                        $pedido= $json_app['pedido'];
                        $receptor = $json_app['receptor'];
                        $idAdmCloud = $json_app['idAdmCloud'];
                        $nombreComercial = $receptor['nombreComercial'];
                        $telefono = $receptor['telefono'];
                        $dirEnvio = $receptor['dirEnvio'];
                        $cedula =   $receptor['cedula'];
                        $venta =   $json_app['venta'];
                        $plazo =   $venta['plazo'];
                      }
                      }
            ?>
            <style>
              .parentheader {
display: grid;
grid-template-columns: 1fr 6fr;
grid-template-rows: repeat(6, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.divuno { grid-area: 1 / 2 / 2 / 3; }
.divdos { grid-area: 2 / 2 / 3 / 3; }
.divtres { grid-area: 1 / 1 / 3 / 5; }
            </style>
          <!-- partial:index.partial.html -->
          <div class="container invoice">
            <div class="invoice-header" style="width: 1150px;">
              <div class="row">
                <div class="col-xs-8" style="float:right;">
                <div class="parent">
                <div class="divuno"><h4><strong>CORPORACION RAVEN</strong></h4>
                 <h7>Cédula Jurídica: 3-101-014445-33</h7>
                 <br> <h7>Km 6 Autopista Prosperó Fernández</h7>
              </div>
                <div class="divdos"><h7>San José, Costa Rica</h7>
                <br><h7>Telf:(506) 4032-6600 / Fax:(506)2215-1961</h7>
                <br><h7>Apartado Postal: 10228-1000 / www.laboratorioraven.com</h7>
                </div>
                <div class="divtres"> <img class="media-object logo" src="../../../app-assets/images/logos/raven.jpeg" /></div>
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
                          value: "https://appraven.appsngs.com/factura/<?php echo  $key;?>", // La URL o el texto
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
                      <li style="text-align: center;  border-width: 2px; border-style: solid; border-color: rgb(10, 10, 10); border-radius: 8px"><br> <strong>FACTURA No.<?php echo $idAdmCloud;?></strong><br><br></li>
                      <br>
                      <li style="  text-align: center;  border-image: initial; border: 2px solid black;   border-radius: 5px">FECHA</li>
                      <li style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php  echo  $fech[0] ;?></li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
            <div class="invoice-body">
              <div class="row">
                <div class="invoice-body" style="width: 1150px;">

                  <div class="parent" style="width: 1090px;">
                    <div class="div1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong><br>
                        <p style="font-size:18px">CODIGO CLIENTE:</p>
                      </strong>
                      <p style="font-size:18px">-</p><br>
                    </div>
                    <div class="div2" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong><br>
                        <p style="font-size:18px">CODIGO VENDEDOR:</p>
                      </strong>
                      <p style="font-size:18px">-</p><br>
                    </div>
                    <div class="div3" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong><br>
                        <p style="font-size:18px">ORDEN DE COMPRA:</p>
                      </strong>
                      <p style="font-size:18px"><?php echo $pedido;?></p><br>
                    </div>
                    <div class="div4" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong><br>
                        <p style="font-size:18px">PLAZO:</p>
                      </strong>
                      <p style="font-size:18px"><?php echo  $plazo;?></p><br>
                    </div>
                    <div class="div5" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"><br>
                      <p style=" font-size:18px"> &nbsp; &nbsp;<strong>CLIENTE:</strong><?php   echo  $nombreComercial;?></p><br>
                    </div>
                    <div class="div6" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"><br>
                      <p style=" font-size:18px"> &nbsp; &nbsp;<strong>DIRECCION:</strong> <?php echo  $dirEnvio;?></p><br>
                    </div>
                    <div class="div7" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:16px"> &nbsp; &nbsp;<strong>CONTACTO:</strong>-</p><br>
                    </div>
                    <div class="div8" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br>
                      <p style=" font-size:16px"> &nbsp; &nbsp;<strong>TELEFONO:</strong> <?php echo  $telefono;?> </p><br>
                    </div>
                    <div class="div9" style="  text-align: left;  border-image: initial; border: 2px solid black; border-radius: 5px"><br>
                      <p style=" font-size:16px"> &nbsp; &nbsp;<strong>CJ:</strong> <?php  echo $cedula;?></p><br>
                    </div>
                    <div class="div90" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <br><strong>
                        <p style="font-size:18px">NOTAS:</p>
                      </strong>
                      <p style="font-size:18px">--</p><br>
                    </div>
                    <div class="div101" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><br><strong>
                        <p style="font-size:18px">Exento al: </p>
                      </strong>
                      <p style="font-size:18px">-%</p><br>
                    </div>
                  </div>

                </div>


              </div>

              <div class="panel panel-default" style="width: 1090px;">
                <table class="table table-bordered table-condensed" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                  <thead style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                    <tr>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">CANTIDAD</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">CODIGO</td>
                      <td class="text-center col-xs-0" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">DESCRIPCION</td>
                      <td hidden class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">PROMO</td>
                      <td class="text-center col-xs-" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">IVA%</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">PRECIO UNITARIO</td>
                      <td class="text-center col-xs-1" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">VALOR TOTAL</td>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                     $impuesto_valor_1  =0;
                     $impuesto_valor_2  =0;
                     $impuesto_valor_13 =0;
                  foreach ( $LineaDetalle  as $data) {
                    if($data==1){
                      $Cantidad       = $LineaDetalle [$Cantidad];
                      $codigoRest   = $codigo[$codigoRest_xml_factura];
                      $Impuesto     = $LineaDetalle [$Impuesto_xml_factura];
                      $Monto        = $Impuesto[$Monto_xml_factura];
                      ?>
                    <tr>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$18,240.00</th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-$1,800.00</th>
                      <th class="text-center rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                        <p>aaaaaaaaa aaaaaaaa aaaaaa</p>
                      </th>
                      <th  hidden class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$3,312.00</th>

                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$19,752.00</th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$19,752.00</th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$19,752.00</th>
                    </tr>
                    <?php break; 
                         }else{
                          $Cantidad       = $data [$Cantidad_xml_factura];
                          $comercial     = $data[$codigo_xml_factura];
                          $codigoRest     = $comercial[$codigoRest_xml_factura];
                          $Detelle        = $data[$Detalle_xml_factura];
                          $Unitario        = $data[$PrecioUnitario_xml_factura];
                          $TotalL        = $data[$MontoTotalLinea_xml_factura];
                          $impuesto       = $data[$Impuesto_xml_factura];
                          $tarifa         = $impuesto[$Tarifa_xml_factura];
                          $monto          = $impuesto[$Monto_xml_factura];
                          if($tarifa==1){
                            $impuesto_valor_1  +=$monto;
                          }
                          if($tarifa==2){
                            $impuesto_valor_2  +=$monto;
                           
                          }
                          if($tarifa==13){
                            $impuesto_valor_13  +=$monto;
                          }
                          ?>
                <tr>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $Cantidad;?></th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $codigoRest;?></th>
                      <th class="text-center rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">
                        <p><?php echo  $Detelle;?></p>
                      </th>
                      <th  hidden class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">$3,312.00</th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  $tarifa;?></th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format( $Unitario, 2, ".", ",") ;?></th>
                      <th class="text-left rowtotal mono" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo  number_format( $TotalL, 2, ".", ",");?></th>
                     
                    </tr>

                 <?php } } ?>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <style>
                  .parent2 {
                    display: grid;
                    grid-column-gap: 0px;
                    grid-row-gap: 0px;
                  }

                  .div11 {
                    grid-area: 1 / 9 / 5 / 10;
                  }

                  .div12 {
                    grid-area: 1 / 8 / 5 / 9;
                  }

                  .div13 {
                    grid-area: 1 / 8 / 2 / 9;
                  }

                  .div14 {
                    grid-area: 2 / 8 / 3 / 9;
                  }

                  .div15 {
                    grid-area: 4 / 8 / 5 / 9;
                  }

                  .div16 {
                    grid-area: 4 / 9 / 5 / 10;
                  }

                  .div17 {
                    grid-area: 1 / 1 / 2 / 8;
                  }

                  .div18 {
                    grid-area: 1 / 1 / 2 / 4;
                  }

                  .div19 {
                    grid-area: 1 / 5 / 2 / 8;
                  }

                  .div110 {
                    grid-area: 2 / 1 / 3 / 3;
                  }

                  .div111 {
                    grid-area:2 / 3 / 3 / 6;
                  }

                  .div112 {
                    grid-area:  2 / 6 / 3 / 8; 
                  }

                  .div113 {
                    grid-area: 2 / 1 / 3 / 8;
                  }

                  .div114 {
                    grid-area: 4 / 1 / 5 / 3;
                  }

                  .div115 {
                    grid-area: 4 / 3 / 5 / 6;
                  }

                  .div116 {
                    grid-area: 4 / 6 / 5 / 8;
                  }
                </style>

                <div class="invoice-body">
                  <div class="parent2" style="width: 1090px;">
                    <div class="div11" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format( $TotalVenta, 2, ".", ",")   ;?><br>
                    
                      <br><?php echo number_format( $TotalDescuentos, 2, ".", ",")   ;?>  
                      <br>
                      <br>
                      <br>
                      <br><?php echo number_format( $impuesto_valor_2, 2, ".", ",")   ;?>  
                      <br>
                      <br><?php echo number_format( $impuesto_valor_13, 2, ".", ",")   ;?>  
                      <br>
                      <br><?php echo number_format( $impuesto_valor_1, 2, ".", ",")   ;?>  
                      <br>
                    </div>
                    <div class="div12" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                    <div class="div13" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <strong>SUB TOTAL $</strong><br>
                      <br><strong>DECUENTO $</strong>
                    </div>
                    <div class="div14" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>IMP.VENTAS(*) 2% </strong><br>
                      <br><strong>IMP.VENTAS(*) 13% </strong>
                      <br>
                      <br><strong>IMP.VENTAS() 1% </strong>
                    </div>
                    <div class="div15" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>TOTAL</strong></div>
                    <div class="div16" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><?php echo number_format( $TotalComprobante, 2, ".", ",")   ;?>   </div>
                    <div class="div17" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                    <div class="div18"> <strong>
                        <p style="font-size:15px"><br>&nbsp; &nbsp;CUENTA BANCARIA: </p>
                      </strong>
                      <p style="font-size:15px">&nbsp; &nbsp;Davivienda</p>
                      <p style="font-size:15px"><strong>&nbsp; &nbsp;COLONES</strong>: CR13010409142212308116</p>
                      <p style="font-size:15px"><strong>&nbsp; &nbsp;COLONES</strong>: CR13010409142212308116</p>
                    </div>
                    <div class="div19"> <strong>
                        <p style=" text-align: right; font-size:15px"><br>FACTURA ELECONICA: &nbsp; &nbsp; </p>
                      </strong>
                      <p style=" text-align: right;font-size:15px"><?php echo  $NumeroConsecutivo;?>&nbsp; &nbsp; </p>
                      <strong>
                        <p style="  text-align: right;font-size:15px"><br>CLAVE ELECTRONICA: &nbsp; &nbsp; </p>
                      </strong>
                      <p style="  text-align: right;font-size:15px"><?php echo  $clave_array ;?>&nbsp; &nbsp; </p>
                    </div>
                    <div class="div110" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                    <div class="div111" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                    <div class="div112" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px">-</div>
                    <div class="div113" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> </div>
                    <div class="div114" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>HECHO POR</strong> </div>
                    <div class="div115" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"><strong>RECIBIDO CONFORME</strong> </div>
                    <div class="div116" style="  text-align: center;  border-image: initial; border: 2px solid black; border-radius: 5px"> <strong>No. DE CEDULA</strong></div>
                  </div>
                  <style>
                    .parent3 {
                      display: grid;
                      grid-template-columns: repeat(9, 1fr);
                      grid-template-rows: repeat(5, 1fr);
                      grid-column-gap: 0px;
                      grid-row-gap: 0px;
                    }

                    .divfinal {
                      grid-area: 1 / 1 / 2 / 10;
                    }

                    hr {
                      display: block;
                      margin-top: 0.5em;
                      margin-bottom: 0.5em;
                      margin-left: auto;
                      margin-right: auto;
                      border-style: inset;
                      border-width: 1px;
                    }
                  </style>
                  <div class="parent3">
                    <div class="divfinal" style="  text-align: center;"> ***FACTURA EN COLONES***</div>
                  </div>
                  <hr>
                </div>


              </div>
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
<script src="../../../app-assets/js/scripts/pages/app-invoice-print.min.js?1111"></script>
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