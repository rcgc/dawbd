<?php

	 function navbar() {
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

    function ejercicio1(){
        include("includes/_ejercicio1.html");
        include("ejercicio1.php");
    }

    function ejercicio2(){
        include("includes/_filesupload.html");
        //include("filesupload.php");
    }

    function ep(){
        include("includes/_btn_ep.html");
    }

    function form2(){
        include("includes/_form2.html");
    }

    function action_form2(){
        include("registro_jugador.php");
    }

    function ejercicio3(){

    }
    
    function btnperfil(){
        include("includes/_btn_perfil.html");
    }

?>  