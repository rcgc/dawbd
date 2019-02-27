<?php 

	require_once("util.php");
	
	encabezado();
	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 9</h1></div>");

	set_tab_lab_number(9);

	imprimir_subtitulo("<div class='container'><h3 class='left-align'>Ejercicios</h3></div><br>");

	exercise1();

	exercise2();

	exercise3();

	exercise4();

	exercise5();
	
	imprimir_subtitulo("<br><div class='container'><h3 class='left-align'>Preguntas</h3></div><br>");

	questions();

	//phpinfo();

	footer();	

?>