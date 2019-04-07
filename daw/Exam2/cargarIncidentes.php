<?php
    function cargarSelect(){
       $opciones = array();
       $i = 0;
       $connection = connectDB();
        $result = mysqli_query($connection,"SELECT * FROM tipoincidente");
        
        
        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
             //push de nombres de base de datos a arreglo
            array_push($opciones,$row);
        }
        
        $i=0;
        for($i = 0;$i<count($opciones);$i++){
            $nombre = $opciones[$i]['Tipo'];
            $id = $opciones[$i]['ID'];
            include 'views/_optionSelect.html';
        }
        
   }
        
    cargarSelect();
        
?>