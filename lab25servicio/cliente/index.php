<?php
    //display all records
    
    
    $app->get('/cliente/index', function(){
        
        require_once('util.php');
        
        $result=getTablaDescripciones();
        
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
        
        if(isset($data)){
            header('Content-Type: application/json');
            echo json_encode($data);
        }
        
    });
    
    //echo "Hola mundo desde lab25cliente";

?>