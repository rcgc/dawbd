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

    function form1(){
        include("includes/_form1.html");
        echo "<br>";
    }

    function action_form1(){
        if(isset($_POST['btn_form1'])){
                //$value = $_POST["txt1"];
                echo "<div class='container'>";
                echo "<div class='center-align'>";
                echo "<strong>Nombre: </strong>".$_POST["name"]."<br>";
                echo "<strong>E-mail: </strong>".$_POST["email"];
                echo "</div>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
        }
    }

    function form2(){
        include("includes/_form2.html");
    }

    function action_form2(){
        include("registro_jugador.php");
    }

    function info($mensaje) {
        $mensaje = "<div class='container''>".$mensaje."</div>";
        echo $mensaje;
    }

    function call_btn(){
        include("includes/_btn_ep.html");   
    }
?>  