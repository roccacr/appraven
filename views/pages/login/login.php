<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="auth-wrapper auth-basic px-2">
            <div class="auth-inner my-2">
                <!-- Login basic -->
                <div class="card mb-0" style="border-radius: 7px;
background: linear-gradient(145deg, #181f34, #141a2c);
box-shadow:  23px 23px 46px #0f1320,
             -23px -23px 46px #1d2742;">
                    <div class="card-body">
                        <a href="/" class="brand-logo">
                        <img style="width: 150px;
                                 height: auto;"  src="../../app-assets/images/logos/logonuevo.png">
                            <!-- <h2 class="brand-text text-dark ms-1">Rocca Development Group</h2> -->
                        </a>

                        <h4 class="card-title mb-1">Bienvenido de nuevo! 👋</h4>
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

