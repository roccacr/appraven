<!-- <script src="../../../../app-assets/sweetalert2/sweetalert2.js?123"></script> -->
<?php
require_once "controllers/usuarios.controller.php";
$create = new UsuariosController();
$create -> crear();
$select = "*";
$url = "permisos?select=".$select."&linkTo=id_user&equalTo=". $_SESSION["admin"]->id_user;
$method = "GET";
$fields = array();
$responsepermisos = CurlController::request($url,$method,$fields);
if($responsepermisos->status == 200){
  $permiso= $responsepermisos->results;
  foreach ($permiso as $data) {
 if ($data->consultarUsuarios_permiso==1){
?>
<section id="row-grouping-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Informacion de Usuarios</h4>
                    <?php if ($data->crearUsuario_permiso==1){?>
                    <button class="dt-button create-new btn btn-dark" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>Nuevo Usuario</span></button>
                                        <?php }else{?>
                                            <button type="button" class="btn btn-outline-primary waves-effect" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title=" Lo sentimos No tienes permiso para crear usuarios, comunícate con el administrador">
                                            Nuevo Usuario
                                            </button>
                                       <?php } ?>
                </div>
                <div class="card-datatable">
                    <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <table id="DataTables_Table_2" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                    <th>Apelido</th>
                                    <th>rol</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $select = "*";
                                  $url = "users";
                                  $method = "GET";
                                  $fields = array();
                                  $response = CurlController::request($url, $method, $fields);
                                  if ($response->status == 200) {
                                    $response = $response->results;
                                    foreach($response as $data){?>
                                        <tr>
                                            <td><?php echo $data->cedula_user;?></td>
                                            <td><?php echo $data->nombre_user;?></td>
                                            <td><?php echo $data->apellidos_user;?></td>
                                            <td><?php echo $data->rol_id_user;?></td>
                                            <td><?php echo $data->email_user;?></td>
                                            <td><?php if($data->estado_user==1){?>
                                                <span class="badge rounded-pill badge-light-success me-1">Activo</span></td>
                                           <?php }else{?>
                                                <span class="badge rounded-pill badge-light-warning me-1">Inactivo</td>
                                           <?php }?>
                                                <td> <a href="/users/edit" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Editar"><i data-feather='edit'></i></a> / <a href="/users/edit" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Permisos de usuario"><i data-feather='align-center'></i></a></td>
                                        </tr>
                                        <?php }
                                    }else{?>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                           <td>-</td>
                                        </tr>
                                  <?php  }?>
                            </tbody>
                        </table>
                        <br>
                        <div class="d-flex justify-content-between mx-0 row">
                            <div class="col-sm-12 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }else{
     echo '<div class="alert alert-danger" role="alert">
     <h4 class="alert-heading">Lo sentimos</h4>
     <div class="alert-body">
      No tienes permisos para ver esta vista, consulta con el administrador del sitio.
     </div>
   </div>';
}
  }
}else{
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Lo sentimos</h4>
    <div class="alert-body">
    Todavía no tienes permisos para ver esta vista, consulta con el administrador del sitio.
    </div>
  </div>';
}




?>
    <div class="modal modal-slide-in fade" id="modals-slide-in">
        <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0 needs-validation" method="post" novalidate>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Cedula</label>
                        <input  onchange="validateJS(event, 'text&number')" type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" name="cedula" placeholder="#0000" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Nombre</label>
                        <input  onchange="validateJS(event, 'text')" type="text" id="basic-icon-default-post" class="form-control dt-post" name="nombre" placeholder="Nombre" required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Apellido</label>
                        <input  onchange="validateJS(event, 'text')" type="text" id="basic-icon-default-post" class="form-control dt-post" name="apellido" placeholder="Apellido"  required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-email">Correo</label>
                        <input  onchange="validateJS(event, 'email')" type="email" id="basic-icon-default-email" class="form-control dt-email" name="email" placeholder="ejemplo@example.com"  required>
                        <small class="form-text"> Puedes usar letras, números y puntos </small>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">Rol</label>
                        <select class="form-select" id="basicSelect" name="rol" required >
                        <option value="">Opcion</option>
                        <option value="1">IT</option>
                        <option value="2">Usuario</option>
                        </select>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-date">Contraseña</label>
                        <input onchange="validateJS(event, 'pass')" type="password" class="form-control dt-date flatpickr-input" name="pass" id="basic-icon-default-date" placeholder="*******" required>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">Estado</label>
                        <select class="form-select" id="basicSelect" name="estado" required>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                        </select>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Por favor rellene este campo.</div>
                    </div>
                    <button type="submit" class="btn btn-dark data-submit me-1 waves-effect waves-float waves-light">Crear</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>

 


    <script src="../../../app-assets/formulario/form.js?123">

</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

<!-- searchPanes -->
<link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.0.1/css/searchPanes.dataTables.min.css">
<!-- select -->
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--   Datatables-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

<!-- searchPanes   -->
<script src="https://cdn.datatables.net/searchpanes/1.0.1/js/dataTables.searchPanes.min.js"></script>
<!-- select -->
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
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