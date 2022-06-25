<?php
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
  <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>FACTURA</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
  <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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
            if ($routesArray[1] == "login" || $routesArray[1] == "auth-recover") {
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
      $routesArray[1] == "factura"
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
  <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
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