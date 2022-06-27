<?php



if (isset($_POST["agregarpermisos"])) {
  /* Requerir el archivo "controladores/usuarios.controller.php" */
  require_once "controllers/permisos.controller.php";
  /* Creando una nueva instancia de la clase UsuariosController. */
  $create = new PermisosController();
  /* Creando un nuevo objeto de la clase "crear" y llamando a la función "crear" */
  $create->crear();
}







$select = "*";
$url = "$tbl_permisos?select=" . $select . "&linkTo=$id_user_va&equalTo=" . $_SESSION["admin"]->$id_user_va;
$method = "GET";
$fields = array();
$responsepermisos = CurlController::request($url, $method, $fields);
if ($responsepermisos->status == 200) {
  $permiso = $responsepermisos->results;
  foreach ($permiso as $data) {
    if ($data->$crearPermisos_permiso_va == 1) {
      if (isset($routesArray[3]) == false) {
        $yourURL = "/usuario/list";
        echo ("<script>location.href='$yourURL'</script>");
      } else {
        $exp = explode("~", $routesArray[3]);
        $routesArray = base64_decode($exp[0]);
        if (isset($routesArray)) {
          $select = "*";
          $url = "$tbl_permisos?select=" . $select . "&linkTo=$id_user_va&equalTo=" . $routesArray;
          $method = "GET";
          $fields = array();
          $responsePermiso = CurlController::request($url, $method, $fields);
          if ($responsePermiso->status == 200) { 
            $responsePer= $responsePermiso->results;
 
            if (isset($_POST["editar_permisos"])) {
              /* Requerir el archivo "controladores/usuarios.controller.php" */
              require_once "controllers/permisos.controller.php";
              /* Creando una nueva instancia de la clase UsuariosController. */
              $create = new PermisosController();
              /* Creando un nuevo objeto de la clase "crear" y llamando a la función "crear" */
              $id=$routesArray;
              $create->editar($id);
            }
            ?>

          
            <div class="content-header row">
            </div>
            <div class="content-body">
              <h3>Editar Permisos</h3>
              <p class="mb-2">
                Todos los permisos son administrados por IT por lo que solo las personas con acceso a permisos puede crear y editar <br />
              </p>
              <!-- Role cards -->
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="card">
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="d-flex align-items-end justify-content-center h-100">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/faq-illustrations.svg" class="img-fluid mt-2" alt="Image" width="85" />
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="card-body text-sm-end text-center ps-sm-0">
                          <a href="javascript:void(0)" data-bs-target="#editRoleModal" data-bs-toggle="modal" class="stretched-link text-nowrap add-new-role">
                            <span class="btn btn-primary mb-1">Editar Permisos</span>
                          </a>
                          <p class="mb-0">Editar Los permisos para este usuario</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="editRoleModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                    <div class="modal-content">
                      <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body px-5 pb-5">
                        <div class="text-center mb-4">
                          <h1 class="role-title">Editar Permisos</h1>
                          <p>Editar os perisos para este usuario</p>
                        </div>
                        <!-- Add role form -->
                        <form class="row" id="addRoleForm" method="post">
                            <div class="col-12">
                              <h4 class="mt-2 pt-50">Permisos</h4>
                              <!-- Permission table -->
                              <div class="table-responsive">
                                <input class="form-check-input" type="text" id="userManagementRead" name="editar_permisos" hidden />
                                <input class="form-check-input" type="text" id="userManagementRead" name="id_user" value="<?php echo $routesArray; ?>" hidden />
                                <table class="table table-flush-spacing">
                                  <tbody>
                                  <?php foreach ($responsePer as $data) {
                                    $value1=$data->$consultarUsuarios_permiso_va;
                                    $value2=$data->$consultarFacturas_permiso_va;
                                    $value3=$data->$crearUsuario_permiso_va;
                                    $value4=$data->$crearPermisos_permiso_va;
                                    $value5=$data->$editarUsuarios_permiso_va;
                                    $value6=$data->$id_user_permiso_va;


                                    
                                    if($value1==1){$chek1="checked";}else{$chek1="";}
                                    if($value2==1){$chek2="checked";}else{$chek2="";}
                                    if($value3==1){$chek3="checked";}else{$chek3="";}
                                    if($value4==1){$chek4="checked";}else{$chek4="";}
                                    if($value5==1){$chek5="checked";}else{$chek5="";}
                                    // echo '<pre>'; print_r($chek1); echo '</pre>';
                                    // echo '<pre>'; print_r($chek2); echo '</pre>';
                                    // echo '<pre>'; print_r($chek3); echo '</pre>';
                                    // echo '<pre>'; print_r($chek4); echo '</pre>';
                                    // echo '<pre>'; print_r($chek5); echo '</pre>';


                                    ?>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Consultar Facturas</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="userManagementRead" name="editar_consultarFacturas" <?php echo $chek2;?> />
                                            <label class="form-check-label" for="editar_consultarFacturas"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Consultar Usuarios</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="contentManagementRead" name="editar_consultarUsuarios"  <?php echo $chek1;?>/>
                                            <label class="form-check-label" for="editar_consultarUsuarios"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Crear Usuarios</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dispManagementRead" name="editar_crearUsuarios" <?php echo $chek3;?>/>
                                            <label class="form-check-label" for="editar_crearUsuarios"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Crear Permisos</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dbManagementRead" name="editar_crearPermisos" <?php echo $chek4;?> />
                                            <label class="form-check-label" for="editar_crearPermisos"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Editar Permisos</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dbManagementRead" name="editar_editarUsuario" <?php echo $chek5;?> />
                                            <label class="form-check-label" for="editar_editarUsuario"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>

                                    <?php }?>
                                  </tbody>
                                </table>
                              </div>
                              <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-2">
                              <button type="submit" class="btn btn-primary me-1">Crear</button>
                              <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancelar
                              </button>
                            </div>
                          </form>
                        <!--/ Add role form -->
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Add Role Modal -->




              <?php } else { ?>
                <div class="row">
                  <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="d-flex align-items-end justify-content-center h-100">
                            <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/faq-illustrations.svg" class="img-fluid mt-2" alt="Image" width="85" />
                          </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="card-body text-sm-end text-center ps-sm-0">
                            <a href="javascript:void(0)" data-bs-target="#addRoleModal" data-bs-toggle="modal" class="stretched-link text-nowrap add-new-role">
                              <span class="btn btn-primary mb-1">Nuevos Permisos</span>
                            </a>
                            <p class="mb-0">Este Usuario no tiene permisos, agrega permisos necesarios</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                      <div class="modal-content">
                        <div class="modal-header bg-transparent">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body px-5 pb-5">
                          <div class="text-center mb-4">
                            <h1 class="role-title">Agregar Permisos</h1>
                            <p>Agregar los permisos para este usuario</p>
                          </div>


                          <!-- Add role form -->
                          <form class="row" id="addRoleForm" method="post">
                            <div class="col-12">
                              <h4 class="mt-2 pt-50">Permisos</h4>
                              <!-- Permission table -->
                              <div class="table-responsive">
                                <input class="form-check-input" type="text" id="userManagementRead" name="agregarpermisos" hidden />
                                <input class="form-check-input" type="text" id="userManagementRead" name="id_user" value="<?php echo $routesArray; ?>" hidden />
                                <table class="table table-flush-spacing">
                                  <tbody>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Consultar Facturas</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="userManagementRead" name="consultarFacturas" value="1" />
                                            <label class="form-check-label" for="consultarFacturas"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Consultar Usuarios</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="contentManagementRead" name="consultarUsuarios" value="1" />
                                            <label class="form-check-label" for="consultarUsuarios"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Crear Usuarios</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dispManagementRead" name="crearUsuarios" value="1" />
                                            <label class="form-check-label" for="crearUsuarios"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Crear Permisos</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dbManagementRead" name="crearPermisos" value="1" />
                                            <label class="form-check-label" for="crearPermisos"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="text-nowrap fw-bolder">Editar Permisos</td>
                                      <td>
                                        <div class="d-flex">
                                          <div class="form-check me-3 me-lg-5">
                                            <input class="form-check-input" type="checkbox" id="dbManagementRead" name="editarUsuario" value="1" />
                                            <label class="form-check-label" for="editarUsuario"> Permiso </label>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-2">
                              <button type="submit" class="btn btn-primary me-1">Crear</button>
                              <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancelar
                              </button>
                            </div>
                          </form>
                          <!--/ Add role form -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Add role form -->
                </div>
              </div>
            </div>

      <?php }
          }
        } ?>

      </div>
      </div>




      </div>
      </div>
      </div>
      <!-- END: Content-->


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
}
?>