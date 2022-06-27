<?php
$select = "*";
$url = "$tbl_permisos?select=" . $select . "&linkTo=$id_user_va&equalTo=" . $_SESSION["admin"]->$id_user_va;
$method = "GET";
$fields = array();
$responsepermisos = CurlController::request($url, $method, $fields);
if ($responsepermisos->status == 200) {
  $permiso = $responsepermisos->results;
  foreach ($permiso as $data) {
    if ($data->$editarUsuarios_permiso_va == 1) {
      if (isset($routesArray[3]) == false) {
        $yourURL = "/usuario/list";
        echo ("<script>location.href='$yourURL'</script>");
      } else {
        $exp = explode("~", $routesArray[3]);
      
        $routesArray = base64_decode($exp[0]);
      
        if (isset($routesArray)) {
          $select = "*";
          $url = "$tbl_users?select=" . $select . "&linkTo=$id_user_va&equalTo=" . $routesArray;
          $method = "GET";
          $fields = array();
          $response = CurlController::request($url, $method, $fields);
          if ($response->status == 200) { 
            $response= $response->results[0];

            if (isset($_POST["edit_cedula"])) {
              /* Requerir el archivo "controladores/usuarios.controller.php" */
              require_once "controllers/usuarios.controller.php";
              /* Creando una nueva instancia de la clase UsuariosController. */
              $create = new UsuariosController();
              /* Creando un nuevo objeto de la clase "crear" y llamando a la función "crear" */
              $id=$routesArray;
              $create->editar($id);
            }

            if ($exp[1]=="Data") {
                echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Exelente</h4>
                <div class="alert-body">
                 Se editaron los datos del usuario
                </div>
              </div>';
            }
           
            ?>
      
                <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Editar el usuario : </h4>
                        </div>
                        <div class="card-body">
                        <form class="form needs-validation" method="post" novalidate>
                            <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label class="form-label" for="basic-icon-default-fullname">Cedula</label>
                                        <input  onchange="validateJS(event, 'text&number')" type="text" class="form-control dt-full-name" value="<?php echo $response->$cedula_user_va;?>" id="basic-icon-default-fullname" name="edit_cedula" placeholder="#0000" required>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basic-icon-default-post">Nombre</label>
                                        <input  onchange="validateJS(event, 'text')" type="text" id="basic-icon-default-post" class="form-control dt-post" name="edit_nombre" placeholder="Nombre" required value="<?php echo $response->$nombre_user_va;?>">
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basic-icon-default-post">Apellido</label>
                                        <input  onchange="validateJS(event, 'text')" type="text" id="basic-icon-default-post" class="form-control dt-post" name="edit_apellido" placeholder="Apellido"  required value="<?php echo $response->$apellidos_user_va;?>">
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basic-icon-default-email">Correo</label>
                                        <input  onchange="validateJS(event, 'email')" type="email" id="basic-icon-default-email" class="form-control dt-email" name="edit_email" placeholder="ejemplo@example.com"  required value="<?php echo $response->$email_user_va;?>">
                                        <small class="form-text"> Puedes usar letras, números y puntos </small>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basicSelect">Rol</label>
                                        <select class="form-select" id="basicSelect" name="edit_rol" required >
                                        <option value="<?php echo $response->$rol_id_user_va; ?>">Opcion</option>
                                        <option value="1">IT</option>
                                        <option value="2">Usuario</option>
                                        </select>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basic-icon-default-date">Contraseña</label>
                                        <input onchange="validateJS(event, 'pass')" type="password" class="form-control dt-date flatpickr-input" name="edit_pass" id="basic-icon-default-date" placeholder="*******">
                                    </div>
                                        <div class="col-md-6 col-12">
                                        <label class="form-label" for="basicSelect">Estado</label>
                                        <select class="form-select" id="basicSelect" name="edit_estado" required>
                                        <option value="<?php echo $response->$estado_user_va;?>">Opcion</option>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                        </select>
                                        <div class="valid-feedback">Valido.</div>
                                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                            <div class="col-12">
                            <button type="submit" class="btn btn-dark data-submit me-1 waves-effect waves-float waves-light">Editar</button>
                                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </section> 
<script src="../../../app-assets/formulario/form.js?123">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#DataTables_Table_2').DataTable({
            searchPanes: {
                cascadePanes: true,
                dtOpts: {
                    dom: 'tp',
                    paging: 'true',
                    pagingType: 'simple',
                    searching: false
                }
            },

        });
    });
</script>

<?php }
          }
        } ?>

<?php } else {
      echo '<div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Lo sentimos</h4>
      <div class="alert-body">
      No tienes permisos para ver esta vista, consulta con el administrador del sitio.
      </div>
    </div>';
    }
  }
} else {
  echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Lo sentimos</h4>
  <div class="alert-body">
  Todavía no tienes permisos para ver esta vista, consulta con el administrador del sitio.
  </div>
</div>';
}?>



cd 