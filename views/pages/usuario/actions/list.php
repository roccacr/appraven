<section id="row-grouping-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Informacion de Usuarios</h4>
                    <button class="dt-button create-new btn btn-dark" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>Nuevo Usuario</span></button>
                </div>
                <div class="card-datatable">
                    <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <table id="DataTables_Table_2" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Puesto</th>
                                    <th>Oficina</th>
                                    <th>Edad</th>
                                    <th>Fecha de Inicio</th>
                                    <th>Salario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
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

    <div class="modal modal-slide-in fade" id="modals-slide-in">
        <div class="modal-dialog sidebar-sm">
            <form class="add-new-record modal-content pt-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Cedula</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" name="cedula" placeholder="#0000" aria-label="#0000">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Nombre</label>
                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" name="nombre" placeholder="Nombre" aria-label="Nombre">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Apellido</label>
                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" name="apellido" placeholder="Apellido" aria-label="Apellido">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-email">Correo</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" name="email" placeholder="ejemplo@example.com" aria-label="jejemplo@example.com">
                        <small class="form-text"> Puedes usar letras, números y puntos </small>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">Rol</label>
                        <select class="form-select" id="basicSelect" name="rol" >
                        <option value="">Opcion</option>
                        <option value="1">IT</option>
                        <option value="2">Usuario</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-date">Contraseña</label>
                        <input type="password" class="form-control dt-date flatpickr-input" name="pass" id="basic-icon-default-date" placeholder="*******" aria-label="*******" >
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">Estado</label>
                        <select class="form-select" id="basicSelect" name="estado">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark data-submit me-1 waves-effect waves-float waves-light">Crear</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>

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