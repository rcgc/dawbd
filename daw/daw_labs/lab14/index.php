<?php 

	require_once("util.php");
	
	navbar();
	
	headerr();

	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 14</h1></div>");

	set_tab_lab_number(14);

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicio 1: php y consultas dinámicas a la base de datos</h3></div><br>");

	ejercicio_db1();
	
	echo '<hr>';
	
	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicio 2</h3></div><br>");
	
	players();
	
	echo '<hr>';

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Preguntas</h3></div><br>");
	
	questions();
	
	footer();

?>