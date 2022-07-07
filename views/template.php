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
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
<?php
    if (!isset($_SESSION["admin"])) {
        if (isset($routesArray[1])) {
            if ($routesArray[1] == "login" || $routesArray[1] == "auth-recover"|| $routesArray[1] == "factura" || $routesArray[1] == "credito"|| $routesArray[1] == "pdf") {
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

  <?php
  if (!empty($routesArray[1])) {

    if (
      $routesArray[1] == "admins" ||
      $routesArray[1] == "invoice"||
      $routesArray[1] == "logout" ||
      $routesArray[1] == "factura"||
      $routesArray[1] == "usuario"||
      $routesArray[1] == "aprovisionamiento"||
      $routesArray[1] == "eliminarfacturas"||
      $routesArray[1] == "logs"
      
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