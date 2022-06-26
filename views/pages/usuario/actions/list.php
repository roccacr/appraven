<section id="row-grouping-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Row Grouping</h4>
                    <button class="dt-button create-new btn btn-dark" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>Add New Record</span></button> 
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
                             
                             
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Atención al Cliente</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mx-0 row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
                                        <li class="paginate_button page-item next disabled" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a></li>
                                    </ul>
                                </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Post</label>
                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer">
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com">
                        <small class="form-text"> You can use letters, numbers &amp; periods </small>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                        <input type="text" class="form-control dt-date flatpickr-input" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" readonly="readonly">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000">
                    </div>
                    <button type="button" class="btn btn-dark data-submit me-1 waves-effect waves-float waves-light">Submit</button>
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