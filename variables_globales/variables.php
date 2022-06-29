<?php
/* =======================================================================xxxxxxxxxxxxx
                    TABLA usuarios
=======================================================================xxxxxxxxxxxxx */
$tbl_users              ="users";
$suffix_users           ="user";
$id_user_va             ="id_user";
$cedula_user_va         ="cedula_user";
$username_user_va       ="username_user";
$nombre_user_va         ="nombre_user";
$apellidos_user_va      ="apellidos_user";
$rol_id_user_va         ="rol_id_user";
$password_user_va       ="password_user";
$email_user_va          ="email_user";
$estado_user_va         ="estado_user";
$token_user_va          ="token_user";
$token_exp_user_va      ="token_exp_user";
$estado                 ="1";

/* =======================================================================xxxxxxxxxxxxx
                    TABLA PERMISOS
=======================================================================xxxxxxxxxxxxx */
$tbl_permisos                    ="permisos";
$id_permiso_va                   ="id_permiso";
$consultarUsuarios_permiso_va    ="consultarUsuarios_permiso";
$consultarFacturas_permiso_va    ="consultarFacturas_permiso";
$crearUsuario_permiso_va         ="crearUsuario_permiso";
$crearPermisos_permiso_va        ="crearPermisos_permiso";
$editarUsuarios_permiso_va       ="editarUsuarios_permiso";
$id_user_permiso_va              ="id_user";
$consultarAproviFe_va            ="consultarAproviFe";
$consultarAproviNc_va            ="consultarAproviNc";



/* =======================================================================xxxxxxxxxxxxx
                    TABLA FACTURAS
=======================================================================xxxxxxxxxxxxx */
$tbl_facturas                   ="facturas";
$clave_factura                  ="clave";
$subsidiaria_factura            ="subsidiaria";
$xml_factura                    ="xml";
$fecha_creacion_factura         ="fecha_creacion";
$estado_factura                 ="estado";
$fecha_ultima_modificacion_factura="fecha_ultima_modificacion";
$id_netsuite_factura            ="id_netsuite";
$xml_firmado_factura            ="xml_firmado";
$total_netsuite_factura         ="total_netsuite";
$usuario_factura                ="usuario";
$estado_fac_var                 ="Aceptada";


//ruta donde se guarda el xml
$ruta_xmlFactura                 ="views/xmlFactura/FE-";
$sufix_fac                       ="FE-";

// variables del xml globales
$clave_xml_factura                  = "Clave";
$CodigoActividad_xml_factura        = "CodigoActividad";
$NumeroConsecutivo_xml_factura      = "NumeroConsecutivo";
$FechaEmision_xml_factura           = "FechaEmision";
$Emisor_xml_factura                 = "Emisor";
$Nombre_xml_factura                 = "Nombre";
$Ubicacion_xml_factura              = "Ubicacion";
$OtrasSenas_xml_factura             = "OtrasSenas";
$Identificacion_xml_factura         = "Identificacion";
$NumeroCedula_xml_factura           = "Numero";
$Receptor_xml_factura               = "Receptor";
$Nombre_Receptor_xml_factura        = "Nombre";
$DetalleServicio_xml_factura        = "DetalleServicio";
$LineaDetalle_xml_factura           = "LineaDetalle";
$codigo_xml_factura                 = "CodigoComercial";
$codigoRest_xml_factura             = "Codigo";
$Impuesto_xml_factura               = "Impuesto";
$Monto_xml_factura                  = "Monto";
$NumeroLinea_xml_factura            ="NumeroLinea";
$Cantidad_xml_factura               ="Cantidad";
$Detalle_xml_factura                ="Detalle";
$PrecioUnitario_xml_factura         ="PrecioUnitario";
$MontoTotal_xml_factura             ="MontoTotal";
$MontoTotalLinea_xml_factura        ="MontoTotalLinea";
$ResumenFactura_xml_factura         = "ResumenFactura";;
$TotalMercanciasGravadas_xml_factura  = "TotalMercanciasGravadas";
$TotalGravado_xml_factura             = "TotalGravado";
$TotalVenta_xml_factura               = "TotalVenta";
$TotalVentaNeta_xml_factura           = "TotalVentaNeta";
$TotalImpuesto_xml_factura            = "TotalImpuesto";
$TotalComprobante_xml_factura         ="TotalComprobante";










/* =======================================================================xxxxxxxxxxxxx
                    TABLA CREDITO NOTAS
=======================================================================xxxxxxxxxxxxx */
$tbl_creditonotas               ="creditonotas";
$clave_credito                  ="clave";
$id_netsuite_credito            ="id_netsuite";
$xml_creditonotas               ="xml";
$estado_creditonotas            ="estado";
$xml_firmado_creditonotas       ="xml_firmado";
$estado_creditonotas_var        ="Aceptada";
//ruta donde se guarda el xml
$ruta_xmlFacturaNc                 ="views/xmlFacturaNc/FE-";
$sufix_CRE                       ="NC-";





/* =======================================================================xxxxxxxxxxxxx
                    TABLA HACIENDA MENSAJE
=======================================================================xxxxxxxxxxxxx */
$tbl_hac_men          ="haciendamensajes";
$clave_hac_men        ="clave";
$mensaje_hac_men      ="mensaje";
$xml_hac_men          ="xml";
$ruta_xmlMenHacienda  ="views/xmlMenHacienda/RMH-";
$sufix_hac_men        ="RMH-";

/* =======================================================================xxxxxxxxxxxxx
                  VARIABLES DEL PDF
=======================================================================xxxxxxxxxxxxx */

$xml_PDF          ="xml";
$xml_firmado_PDF         ="xml_firmado";






/* =======================================================================xxxxxxxxxxxxx
                    TABLA aprovisionamiento
=======================================================================xxxxxxxxxxxxx */


$tabl_aprovo_fe                 ="aprovisionamiento_facturaventas";
$clave_aprfac_va                ="clave_aprfac";
$id_aprfac_va                   ="id_aprfac";
$id_admcloud_aprfac_va          ="id_admcloud_aprfac";
$consecutivo_aprfac_va          ="consecutivo_aprfac";
$json_aprfac_va                 ="json_aprfac";
$status_aprfac_va               ="status_aprfac";
$fecha_creacion_aprfac_va       ="fecha_creacion_aprfac";
$fecha_ult_modificacion_aprfac_va="fecha_ult_modificacion_aprfac";
$contexto_aprfac_va             ="contexto_aprfac";
$id_internoadm_aprfac_va        ="id_internoadm_aprfac";











