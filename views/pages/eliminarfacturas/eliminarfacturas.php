
<?php
$files = glob('views/xmlFactura/*.xml'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
    echo "se eliminaron";
}

$files = glob('views/xmlMenHacienda/*.xml'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
    echo "se eliminaron";
}

$files = glob('views/xmlFacturaNc/*.xml'); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file))
    unlink($file); //elimino el fichero
    echo "se eliminaron";
}



