<?php
	session_start();

	echo "<div class='container'>";
	echo "<div class='center-align'>";
	if(isset($_POST["btn1"])){	//CREAR

		// Set session variables
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		echo "Session variables are set.<br><br>";
		echo "<strong>Favorite color is: </strong>" . $_SESSION["favcolor"] . ".<br>";
		echo "<strong>Favorite animal is: </strong>" . $_SESSION["favanimal"] . ".";
	}

	/*elseif (isset($_POST["btn2"])) { //MOSTRAR

		// Echo session variables that were set on previous page
		echo "<strong>Favorite color is: </strong>" . $_SESSION["favcolor"] . ".<br>";
		echo "<strong>Favorite animal is: </strong>" . $_SESSION["favanimal"] . ".";
		//print_r($_SESSION);
	}*/

	elseif (isset($_POST["btn3"])) { //MODIFICAR

		$_SESSION["favcolor"] = "yellow";
		echo "Your favorite color has changed to ".$_SESSION["favcolor"];
	}

	elseif (isset($_POST["btn4"])) { //CERRAR
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		$_SESSION["favcolor"] = "";
		$_SESSION["favanimal"] = "";
		echo "sesión cerrada";
	}

	elseif (isset($_POST["btn5"])) { //LIMPIAR
		echo "";
	}
	echo "</div>";
	echo "</div>";
	
?>