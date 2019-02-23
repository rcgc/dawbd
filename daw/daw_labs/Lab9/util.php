<?php
	 function encabezado() {
        include("includes/_navbar.html");
    }

     function footer() {
        include("includes/_footer.html");
    }

    function questions(){
        include("includes/_questions.html");   
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