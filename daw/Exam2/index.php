<?php

function main(){
    $opciones = array();
    require_once 'util.php';
    
    encabezado();
    
    include("views/_tablaIncidentes.html");
    include("views/_formaRegistroIncidenteUpper.html");
    require 'cargarLugar.php';
    include("views/_formaRegistroIncidenteLower.html");
    include 'views/_selectIncidenteUpper.html';
    require 'cargarIncidentes.php';
    include 'views/_selectIncidenteLower.html';
    
    footer();

}


    main();
?>
