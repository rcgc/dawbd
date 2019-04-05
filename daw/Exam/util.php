<?php

    function encabezado(){
        include("views/_header.html");
    }
    
    function incidentes_controller(){
        include("incidentes.controller.php");
    }
    
    function footer(){
        include("views/_footer.html");
    }
    
    function connectDb(){
        $servername = "localhost";
        $username = "rcgc";
        $password = "";
        $dbname = "Incidentes";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
        mysqli_set_charset($con, "utf8");
        
        //Check connection
        if(!$con){
            die("Connection failed: ".mysqli_connect_error());
        }return $con;
        
    }
    
    function closeDb($mysql){
        mysqli_close($mysql);
    }
    
    function getTablaIncidentesWithoutAjax(){
        
        $conn = connectDb();
        
        $sql = "SELECT * FROM incidentes";
        
        $result = mysqli_query($conn, $sql); 
        
        closeDb($conn);
        
        return $result;
        
    }
    
    function spNuevoIncidente($place, $type){
        
        $conn = connectDb();
        
        
        if (!$conn->query("DROP PROCEDURE IF EXISTS add_incidente") || 
            !$conn->query("CREATE PROCEDURE add_incidente(IN Lugar VARCHAR(80), Tipo VARCHAR (80)) 
            BEGIN 
                INSERT INTO incidentes(Lugar, Tipo) VALUES('". $place ."','". $type ."'); 
            END;")) {
            
            echo "Falló la creación del procedimiento almacenado: (" . $conn->errno . ") " . $conn->error;
        }
        
        $sql="CALL `add_incidente`('".$place."','".$type."')";
        $result=mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }

?>