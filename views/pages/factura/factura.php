

        <?php
        if (isset($routesArray[2])) {
            if ($routesArray[2] == "consultar" || $routesArray[2] == "factura" || $routesArray[2] == "credito" || $routesArray[2] == "pdf") {
                include "actions/" . $routesArray[2] . ".php";
            }
        } else {
            include "actions/consultar.php";
        }
        ?>


