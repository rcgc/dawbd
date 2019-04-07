<?php

    function encabezado(){
        include("views/_header.html");
    }
    
    function footer(){
        include("views/_footer.html");
    }
    
    function connectDb(){
        $servername = "localhost";
        $username = "rcgc";
        $password = "";
        $dbname = "Jurassic";
        
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
    
    function spNuevoIncidente($idplace, $idtype){
        
        $conn = connectDb();
        
     /*   
        if (!$conn->query("DROP PROCEDURE IF EXISTS addIncidente") || 
            !$conn->query("CREATE PROCEDURE addIncidente(IN uIDLugar INT(11), uIDTipo INT (11)) 
            BEGIN 
                INSERT INTO incidentes(IDLugar, IDTipo) VALUES('". $idplace ."','". $idtype ."'); 
            END;")) {
            
            echo "Falló la creación del procedimiento almacenado: (" . $conn->errno . ") " . $conn->error;
        }
    */
        
        $sql="CALL `addIncidente`('".$place."','".$type."')";
        $result=mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
?>