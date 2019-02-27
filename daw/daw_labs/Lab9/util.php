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

    function exercise1(){
        include("includes/_ex1.html");   

        if(isset($_POST['btn1'])){
                $value = $_POST['txt1'];
                
                print_array_string($value);

                promedio($value);
        }
    }

    function print_array_string($value){
        $numbers = explode(" ", $value);

        $arrlength = count($numbers);

        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";
        echo "<strong>Array original: </strong>";
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " ";
        }
        
        echo "</div>";
        echo "</div>";
        echo "<br>";
    }

    function print_array_numbers_asc($numbers){
        
        sort($numbers);

        $arrlength = count($numbers);

        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";
        echo "<strong>Array ascendente: </strong>";
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " ";
        }
        
        echo "</div>";
        echo "</div>";
        echo "<br>";
    }

    function print_array_numbers_desc($numbers){
        
        rsort($numbers);

        $arrlength = count($numbers);

        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";
        echo "<strong>Array descendente: </strong>";
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " ";
        }
        
        echo "</div>";
        echo "</div>";
        echo "<br>";
    }

    function promedio($value){
        $numbers = explode(" ", $value);
                
        $arrlength = count($numbers);
        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";

        echo "<strong>Promedio: </strong>".array_sum($numbers)/$arrlength;
        echo "</div>";
        echo "</div>";
        echo "<br>";
    }

    function exercise2(){
        include("includes/_ex2.html"); 

        if(isset($_POST['btn2'])){
                $value = $_POST['txt2'];

                print_array_string($value);

                $numbers = explode(" ", $value);
                sort($numbers);

                print_array_numbers_asc($numbers);

                mediana($value);
        }  
    }

    function mediana($value){
        $numbers = explode(" ", $value);
        sort($numbers);
                
        $arrlength = count($numbers);
        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";
        
        if($arrlength %2 ==0){
            echo "<strong>Mediana: </strong>".($numbers[($arrlength/2)-1]+$numbers[($arrlength/2)])/2;
        }else{
            echo "<strong>Mediana: </strong>".($numbers[ceil(($arrlength/2)-1)]);
        }
        echo "</div>";
        echo "</div>";
        echo "<br>";   
    }

    function exercise3(){
        include("includes/_ex3.html");
        if(isset($_POST['btn3'])){
                $value = $_POST['txt3'];
                problema3($value);
        }
    }

    function problema3($value){
        $numbers = explode(" ", $value);
        $arrlength = count($numbers);
        echo "<div class= 'container'>";
        echo "<div class= 'center-align'>";

        print_array_string($value);

        promedio($value);

        mediana($value);

        print_array_numbers_asc($numbers);
        print_array_numbers_desc($numbers);

        echo "</div>";
        echo "</div>";
        echo "<br>";
    }

    function exercise4(){
        include("includes/_ex4.html");   

        if(isset($_POST['btn4'])){
            $value = $_POST['txt4'];

            if($value > 0){
                echo "<div class='container'>";
                //echo $value."<br>";
                //echo $_POST['txt1'];
                echo tabla_multiplicar($value);
                echo "</div>";
                echo "<br>";
                echo "<br>";
            }
        }
    }

    function tabla_multiplicar($n) {
        $tabla = "<table class='striped'>";
        $tabla .= "<th>n</th>";
        $tabla .= "<th>n^2</th>";
        $tabla .= "<th>n^3</th>";
        for ($i=1; $i <= $n; $i++) {
            $tabla .= "<tr>";

            for ($j=1; $j <= 1; $j++) {
                $tabla .= "<th>".$i."</th>";
                $tabla .= "<td>".$i*$i."</td>";
                $tabla .= "<td>".$i*$i*$i."</td>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
        return $tabla;
    }

    function exercise5(){
        include("includes/_ex5.html");   
    }

?>  