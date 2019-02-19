<?php
	 function encabezado() {
        include("resources/_header.html");
    }

     function footer() {
        include("resources/_footer.html");
    }

    function imprimir_titulo($titulo) {
        echo "$titulo";
    }

    function imprimir_subtitulo($subtitulo){
    	echo "$subtitulo";
    }

    function set_tab_lab_number($num){
    	echo "<title>Lab".$num."</title>";
    }
?>