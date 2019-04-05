<?php 
    
    //require_once("util.php");

    include("frutas/frutas_view.html");
    
    if(isset($_REQUEST['caja_busqueda'])){
        include("frutas/buscar.php");    
    }
    
?>