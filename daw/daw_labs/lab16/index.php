<?php 
	require_once("util.php");
	
	navbar();
	headerr();

	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 16</h1></div><br>");
	imprimir_titulo("<div class='container'><h3 class='center-align'>\"Php y manipulación de registros de la base de datos\"</h3></div><br>");
	
	echo '<hr>';

	set_tab_lab_number(16);
	imprimir_subtitulo("<div class='container'><h3 class='left-align'><i class='material-icons medium'>search</i> Realizar consultas a una BD</h3></div><br>");
	imprimir_titulo("<div class='container'><h4 class='left-align'>Tabla original</h4></div>");
	players();
	
	echo '<hr>';
	
	imprimir_subtitulo("<div class='container'><h3 class='left-align'><i class='material-icons medium'>group_add</i> Agregar registros a una BD</h4></div><br>");
	insert_player_model();
	
	echo '<hr>';
	
	imprimir_subtitulo("<div class='container'><h3 class='left-align'><i class='material-icons medium'>delete</i> Borrar registros de una BD</h4></div><br>");
	delete_player_model();
	
	echo '<hr>';
	
	imprimir_subtitulo("<div class='container'><h3 class='left-align'><i class='material-icons medium'>edit</i> Modificar registros de una BD</h4></div><br>");
	edit_player_model();
	
	echo '<hr>';

	imprimir_subtitulo("<div class='container'><h3 class='left-align'><i class='material-icons medium'>question_answer</i> Preguntas</h3></div><br>");
	questions();
	footer();
	
	//https://repo-rcgc.c9users.io/phpmyadmin
?>