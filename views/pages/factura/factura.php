<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <?php
        if (isset($routesArray[2])) {
            if ($routesArray[2] == "consultar" || $routesArray[2] == "factura" || $routesArray[2] == "credito") {
                include "actions/" . $routesArray[2] . ".php";
            }
        } else {
            include "actions/consultar";
        }
        ?>