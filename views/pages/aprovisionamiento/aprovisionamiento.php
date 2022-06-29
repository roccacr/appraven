<?php include "views/modules/navbar.php"; ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <?php
        if (isset($routesArray[2])) {
            if ($routesArray[2] == "fe" || $routesArray[2] == "nc" || $routesArray[2] == "edit") {
                include "actions/" . $routesArray[2] . ".php";
            }
        } else {
            include "actions/fe.php";
        }
        ?>