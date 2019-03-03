<?php

  require_once("util.php");

  if(isset($_POST["submit"])) {
        $_POST["email"] = htmlentities($_POST["email"]);
        //$_POST["password"] = htmlentities($_POST["password"]);

        $_POST["first_name"] = htmlentities($_POST["first_name"]);
        $_POST["last_name1"] = htmlentities($_POST["last_name1"]);
        $_POST["last_name2"] = htmlentities($_POST["last_name2"]);

        $_POST["birthdate"] = htmlentities($_POST["birthdate"]);
        $_POST["telephone"] = htmlentities($_POST["telephone"]);
        $_POST["gender"] = htmlentities($_POST["gender"]);


        if (isset($_POST["email"]) 
            && isset($_POST["first_name"]) && isset($_POST["last_name1"])
            && isset($_POST["last_name2"]) && isset($_POST["birthdate"]) 
            && isset($_POST["telephone"]) && isset($_POST["gender"]) 
            && $_POST["email"] != ""
            && $_POST["first_name"] != "" && $_POST["last_name1"] != ""
            && $_POST["last_name2"] != "" && $_POST["birthdate"] != ""
            && $_POST["telephone"] != "") {
                
                
                //header("Location: includes/_registro_jugador.html");
              
                echo "<div class = 'row'>";
                  echo "<div class ='col s4 offset-s4'>";
                    echo "<div class ='card-panel green accent-2'>";
                      echo "<div class = 'center-align'>";
                        
                        echo "Se ha resitrado exitosamente al usuario: ".$_POST["first_name"];

                      echo "</div>";
                    echo "</div>";
                  echo "</div>";  
                echo "</div>";
                
                //$URL="./perfil_jugador.php";
                //echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                
                //echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                
                //$info = "Se guardó el participante: ".$_POST["first_name"]." ".$_POST["last_name1"];
                //info($info);
                include("includes/_footer.html");

              
       } else {
              //echo "<div class='container'>";
              //$error = "*Hay errores en los datos capturados";
              //echo "".$error;
              //echo "</div>";
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