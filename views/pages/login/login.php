<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <title>FACTURA</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">


<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="auth-wrapper auth-basic px-2">
            <div class="auth-inner my-2">
                <!-- Login basic -->
                <div class="card mb-0" style="border-radius: 17px;
background: #161d31;
box-shadow:  16px 16px 30px #0a0d16,
             -16px -16px 30px #222d4c;">
                    <div class="card-body">
                        <a href="/" class="brand-logo">
                        <img style="width: 100px;
                                 height: auto;"  src="../../app-assets/images/logos/image.png">
                            <!-- <h2 class="brand-text text-dark ms-1">Rocca Development Group</h2> -->
                        </a>

                        <h4 class="card-title mb-1">Factura Electrónica</h4>
                        <p class="card-text mb-2">Inicia sesión en tu cuenta</p>

                        <form class="auth-login-form mt-2 needs-validation" method="POST" novalidate>
                            <div class="mb-1">
                                <label for="login-email" class="form-label">Correo Electrónico</label>
                                <input type="text" class="form-control" id="login-email" name="loginEmail" onchange="validateJS(event, 'email')" required />
                                <div class="valid-feedback">Valido.</div>
                                <div class="invalid-feedback">Por favor rellene este campo.</div>
                            </div>


                            <div class="mb-1">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="login-password">Contraseña</label>
                                    <a style="color:aliceblue;" href="auth-forgot-password-basic.html">
                                        <small>¿Has olvidado tu contraseña?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input name="loginPassword" required type="password" class="form-control form-control-merge" id="login-password" />
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Por favor rellene este campo.</div>
                                </div>
                            </div>
                            <button style="color:black" class="btn btn-dark w-100" tabindex="4">Iniciar Sesión</button>
                        </form>
                        <?php

                        require_once "controllers/admins.controller.php";

                        $login = new AdminsController();
                        $login->login();


                        ?>


                    </div>
                </div>
                <!-- /Login basic -->
            </div>
        </div>

    </div>
</div>
</div>

<script src="../../../app-assets/formulario/form.js?123">

</script>

