<?php

    require_once("util.php");

    include("table_views/_table_upper_view.html");
    
    $result = getTablaDescripciones();
    
    while($row = mysqli_fetch_assoc($result)){
        $ID = $row["ID"];
        $Descripcion = $row["Descripcion"];
        
        include("table_views/_table_medium_view.html");
    }
    
    include("table_views/_table_lower_view.html");
    
?>