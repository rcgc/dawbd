<?php

  require_once("util.php");
  
  include("includes/_editplayer-view.html");

  //session_start();

  if(isset($_POST["esubmit"])) { 
   
        if (isset($_POST["ename"]) && isset($_POST["eemail"]) 
          && isset($_POST["etelephone"]) && isset($_POST["eclub"]) 
          && isset($_POST["ehandicap"]) && isset($_POST["ecategory"])
          && isset($_POST["egender"]) 
          && $_POST["ename"] != "" && $_POST["eemail"] != "" 
          && $_POST["etelephone"] != "" && $_POST["eclub"] != ""
          && $_POST["ehandicap"] != "" && $_POST["ecategory"] != ""
          ) {
                //header("Location: includes/_registro_jugador.html");
        	$flag=0;
    		$result = getPlayerByName($_POST["ename"]);
    		
    		while($row = mysqli_fetch_assoc($result)){
        		$aux=$row["name"];
        		if($aux!=""){
        			$flag=1;
        		}
    		}
    		
        	if($flag && updatePlayerByName($_POST["ename"],$_POST["ehandicap"],$_POST["ecategory"],$_POST["eclub"],$_POST["eemail"],$_POST["etelephone"],$_POST["egender"])){
	                echo "<div class = 'row'>";
	                  echo "<div class ='col s4 offset-s4'>";
	                    echo "<div class ='card-panel green accent-2'>";
	                      echo "<div class = 'center-align'>";
	                        
	                        echo "<p><strong>Se ha modificado exitosamente al usuario </strong></p><p>".$_POST["ename"]. "</p>";
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
	                    echo "<p>". $_POST["ename"] ."</p>";
	    
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
              
       } else {

              echo "<div class = 'row'>";
                  echo "<div class ='col s4 offset-s4'>";
                    echo "<div class ='card-panel red accent-2'>";
                      echo "<div class = 'center-align'>";
                        
                        echo "Datos capturados incorrectamente";

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";  
                echo "</div>";

              //include("includes/_registro_jugador.html");
       }
  } else {
          //include("includes/_registro_jugador.html");
    //      echo "No se ha presionado el botón enviar";
  }

?>