<?php
	
	require_once("util.php");

	navbar();

	session_start();

	echo '<div class = "container">';
		echo '<div class="card">';
	    	echo '<div class="card-image waves-effect waves-block waves-light">';
	      		echo '<img class="activator" height="400 px" src="images/golf2.png">';
	    	echo '</div>';
	    	echo '<div class="card-content">';
	      		echo '<span class="card-title activator grey-text text-darken-4">'.$_SESSION["nom"].'<i class="material-icons right">more_vert</i></span>';
	      		echo '<p><a href="#">Más información</a></p>';
	    	echo '</div>';
	    	echo '<div class="card-reveal">';
	      		echo '<span class="card-title grey-text text-darken-4">'.$_SESSION["nom"].'<i class="material-icons right">close</i></span>';


				echo "<div class='center-align'>";
						echo '<img class="activator" height="200 px" src="images/golf.png">';
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Nombre: </strong>'.$_SESSION["nom"]."</p>";
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Apellido paterno: </strong>'.$_SESSION["apellido1"]."</p>";
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Apellido materno: </strong>'.$_SESSION["apellido2"]."</p>";
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Fecha de nacimiento: </strong>'.$_SESSION["cumple"]."</p>";
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Sexo: </strong>'.$_SESSION["tel"]."</p>";
				echo "</div>";


				echo "<div class='row'>";
					echo '<p><strong>Teléfono: </strong>'.$_SESSION["genero"]."</p>";
				echo "</div>";			      		
			      		
			      		
			    echo "<div class='row'>";
			    	echo '<p><strong>E-mail: </strong>'.$_SESSION["correo"]."</p>";
				echo "</div>";  		
			      		
	    	echo '</div>';
	  	echo '</div>';
	echo "</div>";

	footer();
?>