<?php
	
	require_once("util.php");
	
	encabezado();

	imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 9</h1></div><br>");
	
	set_tab_lab_number(9);

	echo "<div class='container'><p>Una función que reciba un arreglo de números y devuelva su promedio</p></div><br>";

	echo "<div class='container'><p>Una función que reciba un arreglo de números y devuelva su mediana</p></div><br>";

	echo "<div class='container'><p>Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor</p></div><br>";	

	echo "<div class='container'><p>Una función que imprima una tabla html, que muestre los cuadrados y cubos de 1 hasta un número n</p></div><br>";

	echo "<div class='container'><p>Escoge algún problema que hayas implementado en otro lenguaje de programación, y dale una solución en php, en una vista agradable para el usuario.</p></div><br>";	
	
	imprimir_subtitulo("<br><div class='container'><h3 class='left-align'>Preguntas</h3></div><br>");

	echo "<div class='container'><p><strong>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</strong></p></div><br>";

	echo "<div class='container'><p><strong>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</strong></p></div><br>";

	echo "<div class='container'><p><strong>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</strong></p></div><br>";

	//phpinfo();
	footer();
?>