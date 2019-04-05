<?php 

    require_once("util.php");
    
    include("_tablaIncidentes_upper_view.html");
    
    $result = getTablaIncidentesWithoutAjax();
    
    while($row = mysqli_fetch_array($result)) {
        
        $ID = $row['ID'];
        $HorayFecha = $row['HorayFecha'];
        $Lugar = $row['Lugar'];
        $Tipo = $row['Tipo'];
        
        include("_tablaIncidentes_medium_view.html");
        
    }
    
    include("_tablaIncidentes_lower_view.html");

    include("_formaRegistroIncidente.html");
    
?>