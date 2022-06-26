
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
      <div class="navbar-header d-xl-block d-none">
       <img style="width: 150px;
  height: auto;"  src="../../app-assets/images/logos/logonuevo.png">
      </div>
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
        
        
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?php echo $_SESSION["admin"]->$nombre_user_va?>  <?php echo $_SESSION["admin"]->$apellidos_user_va ;?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/logos/pro.svg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
              <a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> 
              Perfil</a>
            
              <div class="dropdown-divider"></div>
             
                    <a class="dropdown-item" href="/logout">
                      <i class="me-50" data-feather="power"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a href="#">
          <h6 class="section-label mt-75 mb-0">Files</h6></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="me-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
            </div>
          </div><small class="search-data-size me-50 text-muted">&apos;17kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="me-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div><small class="search-data-size me-50 text-muted">&apos;11kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="me-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div><small class="search-data-size me-50 text-muted">&apos;150kb</small></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
          <div class="d-flex">
            <div class="me-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
            </div>
          </div><small class="search-data-size me-50 text-muted">&apos;256kb</small></a></li>
      <li class="d-flex align-items-center"><a href="#">
          <h6 class="section-label mt-75 mb-0">Members</h6></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div class="d-flex align-items-center">
            <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div class="d-flex align-items-center">
            <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div class="d-flex align-items-center">
            <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
          <div class="d-flex align-items-center">
            <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
      <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="index-2.html"><span class="brand-logo">
                 </span>
                 <img style="width: 100px;
                height: auto;"  src="../../app-assets/images/logos/logonuevo.png">
               </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-dark toggle-icon font-medium-4" data-feather="x"></i></a></li>
          </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
          <!-- include ../../../includes/mixins-->
          <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item sidebar-group-<?php if (empty($routesArray)): ?>active <?php endif ?> <?php if (empty($routesArray)): ?>active<?php endif ?>"" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                      <i data-feather='home'></i>
                      <span data-i18n="Pages">Inicio</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li class="<?php if (empty($routesArray)): ?>active<?php endif ?>"" data-menu="">
                          <a class="dropdown-item d-flex align-items-center" href="/" data-bs-toggle="" data-i18n="FAQ">
                          <i data-feather='home'></i><span data-i18n="FAQ">Inicio</span>
                            </a>
                        </li>
                      </ul>
                    </li>
                    <?php
                     require './variables_globales/variables.php';
                    $select = "*";
                    $url = "$tbl_permisos?select=".$select."&linkTo=$id_user_va&equalTo=". $_SESSION["admin"]->$id_user_va;
                    $method = "GET";
                    $fields = array();
                    $responsepermisos = CurlController::request($url,$method,$fields);
                    if($responsepermisos->status == 200){
                      $permiso= $responsepermisos->results;
                      foreach ($permiso as $data) {
                    if ($data->$consultarFacturas_permiso_va ==1){?>
                      <li class="dropdown nav-item sidebar-group-<?php if (!empty($routesArray)  == "factura"): ?>active<?php endif ?> <?php if (!empty($routesArray) && $routesArray[1] == "factura"): ?>active<?php endif ?>"" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13">
                            </line>
                            <line x1="16" y1="17" x2="8" y2="17">
                            </line>
                            <polyline points="10 9 9 9 8 9"></polyline></svg>
                            <span data-i18n="Pages">Factura</span></a>
                          <ul class="dropdown-menu" data-bs-popper="none">
                              <li class="<?php if (!empty($routesArray) && $routesArray[2] == "consultar"): ?>active<?php endif ?>"" data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="/factura/consultar" data-bs-toggle="" data-i18n="FAQ">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                    <span data-i18n="FAQ">Consultar factura</span>
                             </a>
                                   </li>
                            </ul>
                          </li>
                          <?php }?>
                          <?php if ($data->$consultarUsuarios_permiso_va==1){?>
                                <li class="dropdown nav-item sidebar-group-<?php if (!empty($routesArray)  == "usuario"): ?>active<?php endif ?> <?php if (!empty($routesArray) && $routesArray[1] == "usuario"): ?>active<?php endif ?>"" data-menu="dropdown">
                                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                                  <i data-feather='users'></i>
                                      <span data-i18n="Pages">Usuarios</span></a>
                                    <ul class="dropdown-menu" data-bs-popper="none">
                                        <li class="<?php if (!empty($routesArray) && $routesArray[2] == "list"): ?>active<?php endif ?>"" data-menu="">
                                          <a class="dropdown-item d-flex align-items-center" href="/usuario/list" data-bs-toggle="" data-i18n="FAQ">
                                          <i data-feather='users'></i>
                                              <span data-i18n="FAQ">Lista de Usuarios</span>
                                      </a>
                                </li>
                      <?php }?>

                <?php } } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- END: Main Menu-->