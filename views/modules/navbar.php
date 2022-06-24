  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
      <div class="navbar-header d-xl-block d-none">
             <img width="100%" height="50px" src="../../app-assets/images/logos/rocca.png">
           
      </div>
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                <ul class="search-list search-list-bookmark"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
       
        <a class="nav-link" href="/sas" data-bs-toggle="dropdown">
          <li class="nav-item dropdown dropdown-cart me-25"><i class="ficon" data-feather="shopping-cart"></i><span class="badge rounded-pill bg-dark badge-up cart-item-count">6</span>
            
          </li>
          </a>
        
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder"><?php echo $_SESSION["admin"]->nombre_user ?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
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
                  <img width="80%" src="../../app-assets/images/logos/rocca.png">

        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
          <!-- include ../../../includes/mixins-->
          
          <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
             
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="/" data-bs-toggle="dropdown"><i data-feather="home"></i><span data-i18n="Dashboards">INICIO</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="/" data-bs-toggle="" data-i18n="Analytics"><i data-feather="activity"></i><span data-i18n="Analytics">Inicio</span></a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="/" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></i><span data-i18n="Dashboards">INVOICE PAGE</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
              <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="/invoice" data-bs-toggle="" data-i18n="Invoice" ><i data-feather="circle"></i><span data-i18n="Invoice">Invoice</span></a>
                    </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="package"></i><span data-i18n="Apps">Apps</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-email.html" data-bs-toggle="" data-i18n="Email"><i data-feather="mail"></i><span data-i18n="Email">Email</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-chat.html" data-bs-toggle="" data-i18n="Chat"><i data-feather="message-square"></i><span data-i18n="Chat">Chat</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-todo.html" data-bs-toggle="" data-i18n="Todo"><i data-feather="check-square"></i><span data-i18n="Todo">Todo</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-calendar.html" data-bs-toggle="" data-i18n="Calendar"><i data-feather="calendar"></i><span data-i18n="Calendar">Calendar</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-kanban.html" data-bs-toggle="" data-i18n="Kanban"><i data-feather="grid"></i><span data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Invoice"><i data-feather="file-text"></i><span data-i18n="Invoice">Invoice</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-list.html" data-bs-toggle="" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-preview.html" data-bs-toggle="" data-i18n="Preview"><i data-feather="circle"></i><span data-i18n="Preview">Preview</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-edit.html" data-bs-toggle="" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-add.html" data-bs-toggle="" data-i18n="Add"><i data-feather="circle"></i><span data-i18n="Add">Add</span></a>
                    </li>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-file-manager.html" data-bs-toggle="" data-i18n="File Manager"><i data-feather="save"></i><span data-i18n="File Manager">File Manager</span></a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Roles &amp; Permission"><i data-feather="shield"></i><span data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-access-roles.html" data-bs-toggle="" data-i18n="Roles"><i data-feather="circle"></i><span data-i18n="Roles">Roles</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-access-permission.html" data-bs-toggle="" data-i18n="Permission"><i data-feather="circle"></i><span data-i18n="Permission">Permission</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="eCommerce"><i data-feather="shopping-cart"></i><span data-i18n="eCommerce">eCommerce</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-shop.html" data-bs-toggle="" data-i18n="Shop"><i data-feather="circle"></i><span data-i18n="Shop">Shop</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-details.html" data-bs-toggle="" data-i18n="Details"><i data-feather="circle"></i><span data-i18n="Details">Details</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-wishlist.html" data-bs-toggle="" data-i18n="Wishlist"><i data-feather="circle"></i><span data-i18n="Wishlist">Wishlist</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-checkout.html" data-bs-toggle="" data-i18n="Checkout"><i data-feather="circle"></i><span data-i18n="Checkout">Checkout</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="User"><i data-feather="user"></i><span data-i18n="User">User</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-list.html" data-bs-toggle="" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="View"><i data-feather="circle"></i><span data-i18n="View">View</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view-account.html" data-bs-toggle="" data-i18n="Account"><i data-feather="circle"></i><span data-i18n="Account">Account</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view-security.html" data-bs-toggle="" data-i18n="Security"><i data-feather="circle"></i><span data-i18n="Security">Security</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view-billing.html" data-bs-toggle="" data-i18n="Billing &amp; Plans"><i data-feather="circle"></i><span data-i18n="Billing &amp; Plans">Billing &amp; Plans</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view-notifications.html" data-bs-toggle="" data-i18n="Notifications"><i data-feather="circle"></i><span data-i18n="Notifications">Notifications</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view-connections.html" data-bs-toggle="" data-i18n="Connections"><i data-feather="circle"></i><span data-i18n="Connections">Connections</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="layers"></i><span data-i18n="User Interface">User Interface</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-typography.html" data-bs-toggle="" data-i18n="Typography"><i data-feather="type"></i><span data-i18n="Typography">Typography</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-feather.html" data-bs-toggle="" data-i18n="Feather"><i data-feather="eye"></i><span data-i18n="Feather">Feather</span></a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Cards"><i data-feather="credit-card"></i><span data-i18n="Cards">Cards</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-basic.html" data-bs-toggle="" data-i18n="Basic"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-advance.html" data-bs-toggle="" data-i18n="Advance"><i data-feather="circle"></i><span data-i18n="Advance">Advance</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-statistics.html" data-bs-toggle="" data-i18n="Statistics"><i data-feather="circle"></i><span data-i18n="Statistics">Statistics</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-analytics.html" data-bs-toggle="" data-i18n="Analytics"><i data-feather="circle"></i><span data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-actions.html" data-bs-toggle="" data-i18n="Card Actions"><i data-feather="circle"></i><span data-i18n="Card Actions">Card Actions</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Components"><i data-feather="briefcase"></i><span data-i18n="Components">Components</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-accordion.html" data-bs-toggle="" data-i18n="Accordion"><i data-feather="circle"></i><span data-i18n="Accordion">Accordion</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-alerts.html" data-bs-toggle="" data-i18n="Alerts"><i data-feather="circle"></i><span data-i18n="Alerts">Alerts</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-avatar.html" data-bs-toggle="" data-i18n="Avatar"><i data-feather="circle"></i><span data-i18n="Avatar">Avatar</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-badges.html" data-bs-toggle="" data-i18n="Badges"><i data-feather="circle"></i><span data-i18n="Badges">Badges</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-breadcrumbs.html" data-bs-toggle="" data-i18n="Breadcrumbs"><i data-feather="circle"></i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-buttons.html" data-bs-toggle="" data-i18n="Buttons"><i data-feather="circle"></i><span data-i18n="Buttons">Buttons</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-carousel.html" data-bs-toggle="" data-i18n="Carousel"><i data-feather="circle"></i><span data-i18n="Carousel">Carousel</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-collapse.html" data-bs-toggle="" data-i18n="Collapse"><i data-feather="circle"></i><span data-i18n="Collapse">Collapse</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-divider.html" data-bs-toggle="" data-i18n="Divider"><i data-feather="circle"></i><span data-i18n="Divider">Divider</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-dropdowns.html" data-bs-toggle="" data-i18n="Dropdowns"><i data-feather="circle"></i><span data-i18n="Dropdowns">Dropdowns</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-list-group.html" data-bs-toggle="" data-i18n="List Group"><i data-feather="circle"></i><span data-i18n="List Group">List Group</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-modals.html" data-bs-toggle="" data-i18n="Modals"><i data-feather="circle"></i><span data-i18n="Modals">Modals</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-navs-component.html" data-bs-toggle="" data-i18n="Navs Component"><i data-feather="circle"></i><span data-i18n="Navs Component">Navs Component</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-offcanvas.html" data-bs-toggle="" data-i18n="Offcanvas"><i data-feather="circle"></i><span data-i18n="Offcanvas">Offcanvas</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pagination.html" data-bs-toggle="" data-i18n="Pagination"><i data-feather="circle"></i><span data-i18n="Pagination">Pagination</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pill-badges.html" data-bs-toggle="" data-i18n="Pill Badges"><i data-feather="circle"></i><span data-i18n="Pill Badges">Pill Badges</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pills-component.html" data-bs-toggle="" data-i18n="Pills Component"><i data-feather="circle"></i><span data-i18n="Pills Component">Pills Component</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-popovers.html" data-bs-toggle="" data-i18n="Popovers"><i data-feather="circle"></i><span data-i18n="Popovers">Popovers</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-progress.html" data-bs-toggle="" data-i18n="Progress"><i data-feather="circle"></i><span data-i18n="Progress">Progress</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-spinner.html" data-bs-toggle="" data-i18n="Spinner"><i data-feather="circle"></i><span data-i18n="Spinner">Spinner</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-tabs-component.html" data-bs-toggle="" data-i18n="Tabs Component"><i data-feather="circle"></i><span data-i18n="Tabs Component">Tabs Component</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-timeline.html" data-bs-toggle="" data-i18n="Timeline"><i data-feather="circle"></i><span data-i18n="Timeline">Timeline</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-bs-toast.html" data-bs-toggle="" data-i18n="Toasts"><i data-feather="circle"></i><span data-i18n="Toasts">Toasts</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-tooltips.html" data-bs-toggle="" data-i18n="Tooltips"><i data-feather="circle"></i><span data-i18n="Tooltips">Tooltips</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Extensions"><i data-feather="box"></i><span data-i18n="Extensions">Extensions</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-sweet-alerts.html" data-bs-toggle="" data-i18n="Sweet Alert"><i data-feather="circle"></i><span data-i18n="Sweet Alert">Sweet Alert</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-blockui.html" data-bs-toggle="" data-i18n="Block UI"><i data-feather="circle"></i><span data-i18n="Block UI">BlockUI</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-toastr.html" data-bs-toggle="" data-i18n="Toastr"><i data-feather="circle"></i><span data-i18n="Toastr">Toastr</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-sliders.html" data-bs-toggle="" data-i18n="Sliders"><i data-feather="circle"></i><span data-i18n="Sliders">Sliders</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-drag-drop.html" data-bs-toggle="" data-i18n="Drag &amp; Drop"><i data-feather="circle"></i><span data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-tour.html" data-bs-toggle="" data-i18n="Tour"><i data-feather="circle"></i><span data-i18n="Tour">Tour</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-clipboard.html" data-bs-toggle="" data-i18n="Clipboard"><i data-feather="circle"></i><span data-i18n="Clipboard">Clipboard</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-media-player.html" data-bs-toggle="" data-i18n="Media player"><i data-feather="circle"></i><span data-i18n="Media player">Media Player</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-context-menu.html" data-bs-toggle="" data-i18n="Context Menu"><i data-feather="circle"></i><span data-i18n="Context Menu">Context Menu</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-swiper.html" data-bs-toggle="" data-i18n="swiper"><i data-feather="circle"></i><span data-i18n="swiper">Swiper</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-tree.html" data-bs-toggle="" data-i18n="Tree"><i data-feather="circle"></i><span data-i18n="Tree">Tree</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-ratings.html" data-bs-toggle="" data-i18n="Ratings"><i data-feather="circle"></i><span data-i18n="Ratings">Ratings</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-i18n.html" data-bs-toggle="" data-i18n="l18n"><i data-feather="circle"></i><span data-i18n="l18n">l18n</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Page Layouts"><i data-feather="layout"></i><span data-i18n="Page Layouts">Page Layouts</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-full.html" data-bs-toggle="" data-i18n="Layout Full"><i data-feather="circle"></i><span data-i18n="Layout Full">Layout Full</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-without-menu.html" data-bs-toggle="" data-i18n="Without Menu"><i data-feather="circle"></i><span data-i18n="Without Menu">Without Menu</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-empty.html" data-bs-toggle="" data-i18n="Layout Empty"><i data-feather="circle"></i><span data-i18n="Layout Empty">Layout Empty</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-blank.html" data-bs-toggle="" data-i18n="Layout Blank"><i data-feather="circle"></i><span data-i18n="Layout Blank">Layout Blank</span></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Form Elements"><i data-feather="copy"></i><span data-i18n="Form Elements">Form Elements</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input.html" data-bs-toggle="" data-i18n="Input"><i data-feather="circle"></i><span data-i18n="Input">Input</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-groups.html" data-bs-toggle="" data-i18n="Input Groups"><i data-feather="circle"></i><span data-i18n="Input Groups">Input Groups</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-mask.html" data-bs-toggle="" data-i18n="Input Mask"><i data-feather="circle"></i><span data-i18n="Input Mask">Input Mask</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-textarea.html" data-bs-toggle="" data-i18n="Textarea"><i data-feather="circle"></i><span data-i18n="Textarea">Textarea</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-checkbox.html" data-bs-toggle="" data-i18n="Checkbox"><i data-feather="circle"></i><span data-i18n="Checkbox">Checkbox</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-radio.html" data-bs-toggle="" data-i18n="Radio"><i data-feather="circle"></i><span data-i18n="Radio">Radio</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-custom-options.html" data-bs-toggle="" data-i18n="Custom Options"><i data-feather="circle"></i><span data-i18n="Custom Options">Custom Options</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-switch.html" data-bs-toggle="" data-i18n="Switch"><i data-feather="circle"></i><span data-i18n="Switch">Switch</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-select.html" data-bs-toggle="" data-i18n="Select"><i data-feather="circle"></i><span data-i18n="Select">Select</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-number-input.html" data-bs-toggle="" data-i18n="Number Input"><i data-feather="circle"></i><span data-i18n="Number Input">Number Input</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-file-uploader.html" data-bs-toggle="" data-i18n="File Uploader"><i data-feather="circle"></i><span data-i18n="File Uploader">File Uploader</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-quill-editor.html" data-bs-toggle="" data-i18n="Quill Editor"><i data-feather="circle"></i><span data-i18n="Quill Editor">Quill Editor</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-date-time-picker.html" data-bs-toggle="" data-i18n="Date &amp; Time Picker"><i data-feather="circle"></i><span data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                    </li>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-layout.html" data-bs-toggle="" data-i18n="Form Layout"><i data-feather="box"></i><span data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-wizard.html" data-bs-toggle="" data-i18n="Form Wizard"><i data-feather="package"></i><span data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-validation.html" data-bs-toggle="" data-i18n="Form Validation"><i data-feather="check-circle"></i><span data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-repeater.html" data-bs-toggle="" data-i18n="Form Repeater"><i data-feather="rotate-cw"></i><span data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-bootstrap.html" data-bs-toggle="" data-i18n="Table"><i data-feather="server"></i><span data-i18n="Table">Table</span></a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Datatable"><i data-feather="grid"></i><span data-i18n="Datatable">Datatable</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-basic.html" data-bs-toggle="" data-i18n="Basic"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-advanced.html" data-bs-toggle="" data-i18n="Advanced"><i data-feather="circle"></i><span data-i18n="Advanced">Advanced</span></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="file-text"></i><span data-i18n="Pages">Pages</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Authentication"><i data-feather="unlock"></i><span data-i18n="Authentication">Authentication</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Login"><i data-feather="circle"></i><span data-i18n="Login">Login</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-login-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-login-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Register"><i data-feather="circle"></i><span data-i18n="Register">Register</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-register-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-register-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-register-multisteps.html" data-bs-toggle="" data-i18n="Multi-Steps" target="_blank"><i data-feather="circle"></i><span data-i18n="Multi-Steps">Multi-Steps</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Forgot Password"><i data-feather="circle"></i><span data-i18n="Forgot Password">Forgot Password</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-forgot-password-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-forgot-password-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Reset Password"><i data-feather="circle"></i><span data-i18n="Reset Password">Reset Password</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-reset-password-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-reset-password-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Verify Email"><i data-feather="circle"></i><span data-i18n="Verify Email">Verify Email</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-verify-email-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-verify-email-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Two Steps"><i data-feather="circle"></i><span data-i18n="Two Steps">Two Steps</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-two-steps-basic.html" data-bs-toggle="" data-i18n="Basic" target="_blank"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="auth-two-steps-cover.html" data-bs-toggle="" data-i18n="Cover" target="_blank"><i data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Account Settings"><i data-feather="settings"></i><span data-i18n="Account Settings">Account Settings</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings-account.html" data-bs-toggle="" data-i18n="Account"><i data-feather="circle"></i><span data-i18n="Account">Account</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings-security.html" data-bs-toggle="" data-i18n="Security"><i data-feather="circle"></i><span data-i18n="Security">Security</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings-billing.html" data-bs-toggle="" data-i18n="Billings &amp; Plans"><i data-feather="circle"></i><span data-i18n="Billings &amp; Plans">Billings &amp; Plans</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings-notifications.html" data-bs-toggle="" data-i18n="Notifications"><i data-feather="circle"></i><span data-i18n="Notifications">Notifications</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings-connections.html" data-bs-toggle="" data-i18n="Connections"><i data-feather="circle"></i><span data-i18n="Connections">Connections</span></a>
                    </li>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-profile.html" data-bs-toggle="" data-i18n="Profile"><i data-feather="user"></i><span data-i18n="Profile">Profile</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-faq.html" data-bs-toggle="" data-i18n="FAQ"><i data-feather="help-circle"></i><span data-i18n="FAQ">FAQ</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-knowledge-base.html" data-bs-toggle="" data-i18n="Knowledge Base"><i data-feather="info"></i><span data-i18n="Knowledge Base">Knowledge Base</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-pricing.html" data-bs-toggle="" data-i18n="Pricing"><i data-feather="dollar-sign"></i><span data-i18n="Pricing">Pricing</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-license.html" data-bs-toggle="" data-i18n="License"><i data-feather="credit-card"></i><span data-i18n="License">License</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-api-key.html" data-bs-toggle="" data-i18n="API Key"><i data-feather="key"></i><span data-i18n="API Key">API Key</span></a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Blog"><i data-feather="clipboard"></i><span data-i18n="Blog">Blog</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-list.html" data-bs-toggle="" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-detail.html" data-bs-toggle="" data-i18n="Detail"><i data-feather="circle"></i><span data-i18n="Detail">Detail</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-edit.html" data-bs-toggle="" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Mail Template"><i data-feather="mail"></i><span data-i18n="Mail Template">Mail Template</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-welcome.html" data-bs-toggle="" data-i18n="Welcome" target="_blank"><i data-feather="circle"></i><span data-i18n="Welcome">Welcome</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-reset-password.html" data-bs-toggle="" data-i18n="Reset Password" target="_blank"><i data-feather="circle"></i><span data-i18n="Reset Password">Reset Password</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-verify-email.html" data-bs-toggle="" data-i18n="Verify Email" target="_blank"><i data-feather="circle"></i><span data-i18n="Verify Email">Verify Email</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-deactivate-account.html" data-bs-toggle="" data-i18n="Deactivate Account" target="_blank"><i data-feather="circle"></i><span data-i18n="Deactivate Account">Deactivate Account</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-invoice.html" data-bs-toggle="" data-i18n="Invoice" target="_blank"><i data-feather="circle"></i><span data-i18n="Invoice">Invoice</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-mail-template/mail-promotional.html" data-bs-toggle="" data-i18n="Promotional" target="_blank"><i data-feather="circle"></i><span data-i18n="Promotional">Promotional</span></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Miscellaneous"><i data-feather="file"></i><span data-i18n="Miscellaneous">Miscellaneous</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-coming-soon.html" data-bs-toggle="" data-i18n="Coming Soon" target="_blank"><i data-feather="circle"></i><span data-i18n="Coming Soon">Coming Soon</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-not-authorized.html" data-bs-toggle="" data-i18n="Not Authorized" target="_blank"><i data-feather="circle"></i><span data-i18n="Not Authorized">Not Authorized</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-under-maintenance.html" data-bs-toggle="" data-i18n="Maintenance" target="_blank"><i data-feather="circle"></i><span data-i18n="Maintenance">Maintenance</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-error.html" data-bs-toggle="" data-i18n="Error" target="_blank"><i data-feather="circle"></i><span data-i18n="Error">Error</span></a>
                    </li>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="modal-examples.html" data-bs-toggle="" data-i18n="Modal Examples"><i data-feather="square"></i><span data-i18n="Modal Examples">Modal Examples</span></a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Charts"><i data-feather="pie-chart"></i><span data-i18n="Charts">Charts</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="chart-apex.html" data-bs-toggle="" data-i18n="Apex"><i data-feather="circle"></i><span data-i18n="Apex">Apex</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="chart-chartjs.html" data-bs-toggle="" data-i18n="Chartjs"><i data-feather="circle"></i><span data-i18n="Chartjs">Chartjs</span></a>
                    </li>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="maps-leaflet.html" data-bs-toggle="" data-i18n="Leaflet Maps"><i data-feather="map"></i><span data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li>
              </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="box"></i><span data-i18n="Misc">Misc</span></a>
              <ul class="dropdown-menu" data-bs-popper="none">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Menu Levels"><i data-feather="menu"></i><span data-i18n="Menu Levels">Menu Levels</span></a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="" data-i18n="Second Level"><i data-feather="circle"></i><span data-i18n="Second Level">Second Level 2.1</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Second Level"><i data-feather="circle"></i><span data-i18n="Second Level">Second Level 2.2</span></a>
                      <ul class="dropdown-menu" data-bs-popper="none">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="" data-i18n="Third Level"><i data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.1</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="" data-i18n="Third Level"><i data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.2</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="disabled" data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="" data-i18n="Disabled Menu"><i data-feather="eye-off"></i><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/ROCCA D. G.-html-bootstrap-admin-template/documentation" data-bs-toggle="" data-i18n="Documentation" target="_blank"><i data-feather="folder"></i><span data-i18n="Documentation">Documentation</span></a>
                </li>
                <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.ticksy.com/" data-bs-toggle="" data-i18n="Raise Support" target="_blank"><i data-feather="life-buoy"></i><span data-i18n="Raise Support">Raise Support</span></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END: Main Menu-->