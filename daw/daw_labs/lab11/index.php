<?php 

	require_once("util.php");
	
	encabezado();
	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 11</h1></div>");

	set_tab_lab_number(11);

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicios</h3></div><br>");
	
	imprimir_subtitulo("<div class='container'><h5 class='left-align'>Ejercicio W3C Schools</h5></div><br>");

	form1();

	action_form1();

	imprimir_subtitulo("<div class='container'><h5 class='left-align'>Ejercicio personal</h5></div><br>");	

	call_btn();

	imprimir_subtitulo("<br><div class='container'><h3 class='left-align'>Preguntas</h3></div><br>");

	questions();

	footer();	

?>