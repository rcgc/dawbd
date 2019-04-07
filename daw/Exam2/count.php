<?php
    include 'util.php';
    $incidentes = array();
    
    $i = 0;
    $connection = connectDB();
    $result = mysqli_query($connection,"SELECT L.Nombre, T.Tipo, I.FechaHora
    FROM incidentes as I, lugares as L, tipoincidente as T 
    WHERE I.IDLugar = L.ID and I.IDTipo = T.ID");
        
        
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
         //push de nombres de base de datos a arreglo
        array_push($incidentes,$row);
        
    }
    
    echo "(".count($incidentes).")";
?>