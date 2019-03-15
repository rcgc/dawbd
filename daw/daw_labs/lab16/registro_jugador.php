<?php

  require_once("util.php");
  
  include("includes/_addplayer-view.html");

  //session_start();

  if(isset($_POST["submit"])) { 
   
        if (isset($_POST["name"]) && isset($_POST["email"]) 
          && isset($_POST["telephone"]) && isset($_POST["club"]) 
          && isset($_POST["handicap"]) && isset($_POST["category"])
          && isset($_POST["gender"]) 
          && $_POST["name"] != "" && $_POST["email"] != "" 
          && $_POST["telephone"] != "" && $_POST["club"] != ""
          && $_POST["handicap"] != "" && $_POST["category"] != ""
          ) {
                
              
                //header("Location: includes/_registro_jugador.html");
              
                echo "<div class = 'row'>";
                  echo "<div class ='col s4 offset-s4'>";
                    echo "<div class ='card-panel green accent-2'>";
                      echo "<div class = 'center-align'>";
                        
                        echo "<p><strong>Se ha registrado exitosamente al usuario </strong></p><p>".$_POST["name"]. "</p>";
                        include("includes/_btn_aceptar.html");
                        insert_player($_POST["name"], $_POST["handicap"], $_POST["category"], $_POST["club"], $_POST["email"], $_POST["telephone"], $_POST["gender"]);

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";  
                echo "</div>";
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