<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	
	<title></title>
</head>
<body>
	<main>
		<?php require_once("util.php"); ?>
		<?php encabezado(); ?>
		<?php imprimir_titulo("<div class='container'><h1 class='center-align'>Laboratorio 9</h1></div><br>"); ?>	
		<?php set_tab_lab_number(9); ?>

		<?php echo "<div class='container'><p>Una función que reciba un arreglo de números y devuelva su promedio</p></div><br>";

			echo "<div class='container'><p>Una función que reciba un arreglo de números y devuelva su mediana</p></div><br>";

			echo "<div class='container'><p>Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor</p></div><br>";	

			echo "<div class='container'><p>Una función que imprima una tabla html, que muestre los cuadrados y cubos de 1 hasta un número n</p></div><br>";

			echo "<div class='container'><p>Escoge algún problema que hayas implementado en otro lenguaje de programación, y dale una solución en php, en una vista agradable para el usuario.</p></div><br>";	?>

			
		<?php imprimir_subtitulo("<br><div class='container'><h3 class='left-align'>Preguntas</h3></div><br>"); ?>
		<?php questions();?>
	</main>
	<?php //phpinfo(); ?>
	<?php footer();	?>
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--Auto iniciar atributos Materialize-->
	<script type="text/javascript">

		M.AutoInit();
		
	</script>
</body>
</html>