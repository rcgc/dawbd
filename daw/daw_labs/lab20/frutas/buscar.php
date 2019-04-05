<?php

    $salida = "";
    require_once("../util.php");
    
    $conn = connect2();
    $query = "SELECT * FROM frutas WHERE Name NOT LIKE '' ORDER By id";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM frutas WHERE name LIKE '$q%' "; //Busca las que inicien con la letra dada
    }

    $resultado = $conn->query($query);

 
    if ($resultado->num_rows>0) {
    	$salida.="<div class='container'>
    	    <table>
    			<thead>
    				<tr id='titulo'>
    					<th>ID</th>
    					<th>Nombre</th>
    					<th>Unidades</th>
    					<th>Cantidad</th>
    					<th>Precio</th>
                        <th>Ciudad</th>
    				</tr>
    
    			</thead>
        	    <tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<th>".$fila['id']."</th>
    					<td>".$fila['name']."</td>
    					<td>".$fila['units']."</td>
    					<td>".$fila['quantity']."</td>
    					<td>".$fila['price']."</td>
                        <td>".$fila['country']."</td>
    				</tr>";
    	}
    	$salida.="</tbody>
	            </table>
	       </div>
	       <br>";
    }else{
    	$salida.="<div class='container'>
    	        0 coincidencias
    	    </div>";
    }

    echo $salida;
    closeDb($conn);

?>