<?php
	require_once("util.php");
	
	$conn = connectDB();
	
	/*
	$link = mysql_connect('localhost', 'rcgc', 'password')
	    or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db('nombrebasededatos') or die('No se pudo seleccionar la base de datos');
	*/
	
	$sql="SELECT * FROM lugares ORDER BY lugar";
	
	$result = mysql_query($conn, $sql);
	
	$html='<option value="0">Selecciona una opción</option>';
	
	while (($fila = mysql_fetch_array($result)) != NULL) {
	    $html.='<option value="'.$fila["ID"].'">'.$fila["lugar"].'</option>';
	}
	
	echo $html;
	 
	// Cerrar la conexión
	closeDb($conn);
?>