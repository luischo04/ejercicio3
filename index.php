<?php

    require_once "Controllers/rutasC.php";
    require_once "Controllers/empleadosC.php";

    require_once "Models/rutasM.php";
    require_once "Models/empleadosM.php";
    

    $rutas = new RutasControlador();
    $rutas -> Plantilla();
?>