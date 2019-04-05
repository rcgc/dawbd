<?php

    function navbar(){
        include("includes/_navbar.html");
    }
    
    function title(){
        include("includes/_title.html");
    }
    
    function table_controller(){
        include("table.controller.php");
    }
    
    function add_controller(){
        include("agregar.controller.php");
    }
    
    function delete_controller(){
        include("eliminar.controller.php");
    }
    
    function modificar_controller(){
        include("modificar.controller.php");
    }
    
    function suggestions_controller(){
        include("suggestions.controller.php");    
    }
    
    function jobs_controller(){
        include("jobs.controller.php");    
    }
    
    function frutas_controller(){
        include("frutas.controller.php");
    }
    
    function questions(){
        include("includes/_questions.html");
    }
    
    function footer(){
        include("includes/_footer.html");
    }
    
    function connectDb(){
        $servername = "localhost";
        $username = "rcgc";
        $password = "";
        $dbname = "Prueba";
        
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
    
    function getTablaDescripciones(){
        
        $conn = connectDb();
        
        $sql = "SELECT * FROM Descripciones";
        
        $result = mysqli_query($conn, $sql); 
        
        closeDb($conn);
        
        return $result;
        
    }
    
    function sp_new_text($texto){
        
        $conn = connectDb();
        
        if (!$conn->query("DROP PROCEDURE IF EXISTS add_texto") || 
            !$conn->query("CREATE PROCEDURE add_texto(IN Descripcion VARCHAR(80)) 
            BEGIN 
                INSERT INTO Descripciones(Descripcion) VALUES('".$texto."'); 
            END;")) {
            
            echo "Falló la creación del procedimiento almacenado: (" . $conn->errno . ") " . $conn->error;
        }
        
        $sql="CALL `add_texto`('".$texto."')";
        $result=mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    
    function sp_delete_text($id){
        
        $conn = connectDb();
        
        if (!$conn->query("DROP PROCEDURE IF EXISTS delete_texto") || 
            !$conn->query("CREATE PROCEDURE delete_texto(IN Descripcion VARCHAR(80)) 
            BEGIN 
                DELETE FROM Descripciones WHERE ID=".$id."; 
            END;")) {
            
            echo "Falló la creación del procedimiento almacenado: (" . $conn->errno . ") " . $conn->error;
        }
        
        $sql="CALL `delete_texto`('".$id."')";
        $result=mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    
    function sp_modify_text($id, $texto){
        
        $conn = connectDb();
        // La u es necesaria para evitar que se llamen igual y altere todos los registros
        if (!$conn->query("DROP PROCEDURE IF EXISTS modify_texto") || 
            !$conn->query("CREATE PROCEDURE modify_texto(IN uID INT(11), uDescripcion VARCHAR(80)) 
            BEGIN 
                UPDATE Descripciones SET Descripcion='".$texto."' 
                WHERE ID=".$id."; 
            END;")) {
            
            echo "Falló la creación del procedimiento almacenado: (" . $conn->errno . ") " . $conn->error;
        }
        
        $sql="CALL `modify_texto`('.$id.','.$texto.')";
        $result=mysqli_query($conn, $sql);
        closeDb($conn);
        return $result;
    }
    
    function connect2() {
        
        $conexion = mysqli_connect("localhost","rcgc","","fruteria");
        if($conexion == NULL) {
            echo "<script type=''>
            alert('Sin Conexion');
            </script>";
             die("Connection failed: " . mysqli_connect_error());
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }
    
    function insertar_fruta($name, $units, $quantity,$price, $country){
    
        $conn = connect2();
	    $query = "INSERT INTO frutas(name,units,quantity,price,country) VALUES (\"".$name."\",\"".$units."\",".$quantity.",".$price.",\"".$country."\");";
	        
	    if(mysqli_query($conn, $query)){
	        echo "Insercion Correcta";
	        disconnect($conn);
	        return true;
	    }else{
	        echo "ERROR ".$query."<br>".mysqli_error($conn);
	        disconnect($conn);   
	        return false;
	    }    
    }
    
?>