<?php

    require_once("util.php");
    
    include("incidentes/incidentes.model.php");
    
    
    if(isset($_POST['registrar'])){
        if(isset($_POST['lugar_incidente']) && isset($_POST['tipo_incidente'])){
            
            spNuevoIncidente($_POST['lugar_incidente'], $_POST['tipo_incidente']);
            //header("Location: index.php");
            
        }
    }
?>