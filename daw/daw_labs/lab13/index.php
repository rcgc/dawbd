<?php 

	require_once("util.php");

	navbar();

	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 13</h1></div>");

	set_tab_lab_number(13);

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicio 1: Sesiones</h3></div><br>");

	ejercicio1();

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicio 2: Subir archivos al servidor</h3></div><br>");

	ejercicio2();

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicio 3: Ejercicio personal</h3></div><br>");

	ep();

	questions();
	
	footer();

?>