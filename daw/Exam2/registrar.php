<?php
    require_once('util.php');
    
    
    
        
    
        if( isset($_POST['idLugar']) && isset($_POST['idIncidente']) 
            && !empty($_POST['idLugar']) && !empty($_POST['idIncidente'])){
            
            $idLugar = $_POST['idLugar'];
            $idTipo = $_POST['idIncidente'];
            
            spNuevoIncidente($idLugar, $idTipo);
            
            //header("Location: index.php");
        }
        
    
?>