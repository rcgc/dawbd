<?php

	 function navbar() {
        include("includes/_navbar.html");
    }
    
    function headerr(){
        include("header.php");
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
    	echo "<head><title>Lab".$num."</title></head>";
    }
    
    function ejercicio_db1(){
        include("ejercicio_db1.php");
    }
    
    function rwe_buttons(){
        include("includes/_rwe_btns.html");
    }

?>  