<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="auth-wrapper auth-basic px-2">
            <div class="auth-inner my-2">
                <!-- Login basic -->
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="index-2.html" class="brand-logo">

                            <h2 class="brand-text text-dark ms-1">Rocca Development Group</h2>
                        </a>

                        <h4 class="card-title mb-1">Bienvenido a Rocca! 👋</h4>
                        <p class="card-text mb-2">Inicia sesión en tu cuenta</p>

                        <form class="auth-login-form mt-2 needs-validation" method="POST" novalidate>
                            <div class="mb-1">
                                <label for="login-email" class="form-label">Correo Electrónico</label>
                                <input type="text" class="form-control" id="login-email"   name="loginEmail"
                                onchange="validateJS(event, 'email')"
                                required  />
                                <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">Por favor rellene este campo.</div>
                            </div>
                

                            <div class="mb-1">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="login-password">Contraseña</label>
                                    <a href="auth-forgot-password-basic.html">
                                        <small>¿Has olvidado tu contraseña?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input name="loginPassword"
            required type="password" class="form-control form-control-merge" id="login-password"  />
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                </div>
                            </div>
                         
                            <div class="mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                                    <label class="form-check-label" for="remember-me"> Recuérdame </label>
                                </div>
                            </div>
                            <button class="btn btn-dark w-100" tabindex="4">Iniciar Sesión</button>
                        </form>
                        <?php 

                        require_once "controllers/admins.controller.php";

                        $login = new AdminsController();
                        $login->login();


                        ?>

                        <p class="text-center mt-2" style="color:#6F6F6F">
                            <span>¿Nuevo en nuestra plataforma?</span>
                            <a href="auth-register-basic.html">
                                <span>Crea una cuenta</span>
                            </a>
                        </p>

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