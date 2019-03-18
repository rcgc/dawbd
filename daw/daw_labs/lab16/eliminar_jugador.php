<?php
    require_once("util.php");
    
    include("includes/_removeplayer-view.html");
    
    
    if(isset($_GET["btname"]) && $_GET["txname"] !=""){
        $flag=0;
        $result = getPlayerByName($_GET["txname"]);
        while($row = mysqli_fetch_assoc($result)){
            $aux=$row["name"];
            if($aux!=""){
              $flag=1;
            }
        }
        
        if( $flag && deletePlayerByName($_GET["txname"])){
            
            echo "<div class = 'row'>";
              echo "<div class ='col s4 offset-s4'>";
                echo "<div class ='card-panel green accent-2'>";
                  echo "<div class = 'center-align'>";
                    
                    echo "<p><strong>Se ha eliminado exitosamente al usuario </strong></p><p>".$_GET["txname"]. "</p>";
                    include("includes/_btn_aceptar.html");
    
                  echo "</div>";
                echo "</div>";
              echo "</div>";  
            echo "</div>";
            
        }else if(!$flag){
            echo "<div class = 'row'>";
              echo "<div class ='col s4 offset-s4'>";
                echo "<div class ='card-panel red accent-2'>";
                  echo "<div class = 'center-align'>";
                    
                    echo "<p><strong>No existe el jugador: </strong></p>";
                    echo "<p>". $_GET["txname"] ."</p>";
    
                  echo "</div>";
                echo "</div>";
              echo "</div>";  
            echo "</div>";
        }else{
            
            echo "<div class = 'row'>";
              echo "<div class ='col s4 offset-s4'>";
                echo "<div class ='card-panel red accent-2'>";
                  echo "<div class = 'center-align'>";
                    
                    echo "<p><strong>Error en conexión a la BD</strong></p>";
    
                  echo "</div>";
                echo "</div>";
              echo "</div>";  
            echo "</div>";
            
        }
    }
?>