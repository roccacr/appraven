<?php
 require './variables_globales/variables.php';
session_start();
/*=============================================
Capturar las rutas de la URL
=============================================*/
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
/*=============================================
Limpiar la Url de variables GET
=============================================*/
foreach ($routesArray as $key => $value) {
  $value = explode("?", $value)[0];
  $routesArray[$key] = $value;
}
?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
  <base href="<?php echo TemplateController::path() ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

  <title>FACTURA</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
 
  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

<?php
    if (!isset($_SESSION["admin"])) {
        if (isset($routesArray[1])) {
            if ($routesArray[1] == "login" || $routesArray[1] == "auth-recover"|| $routesArray[1] == "factura" || $routesArray[1] == "credito") {
                include "views/pages/login/" . $routesArray[1] . ".php";
            }else {
                include "views/pages/login/login.php";
            }
        } else {
            include "views/pages/login/login.php";
        }
        echo '</body></head>';
        return;
    }
    ?>
<?php if (isset($_SESSION["admin"])) : ?>
<?php include "views/modules/navbar.php"; ?>
  <?php
  if (!empty($routesArray[1])) {

    if (
      $routesArray[1] == "admins" ||
      $routesArray[1] == "invoice"||
      $routesArray[1] == "logout" ||
      $routesArray[1] == "factura"||
      $routesArray[1] == "usuario"||
      $routesArray[1] == "eliminarfacturas"
    ) {
      include "views/pages/" . $routesArray[1] . "/" . $routesArray[1] . ".php";
    } else {
      include "views/pages/404/404.php";
    }
  } else {
    include "views/pages/home/home.php";
  }

  ?>
  </div>
  </div>
  <?php include "views/modules/footer.php"; ?>
  <script src="app-assets/vendors/js/vendors.min.js"></script>
  <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>

    <!-- END: Vendor CSS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>


  <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
  <script src="app-assets/js/core/app-menu.min.js"></script>
  <script src="app-assets/js/core/app.min.js"></script>

  <script src="app-assets/js/scripts/customizer.min.js"></script>
  <!-- <script src="app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script> -->
  <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
  <script src="../../../app-assets/js/scripts/pages/auth-login.js"></script>


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
  <?php endif ?>
</body>
</html>