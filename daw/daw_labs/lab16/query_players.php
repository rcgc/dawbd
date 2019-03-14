<?php

    require_once "util.php";
    
    $result = getPlayers();
    
    if(mysqli_num_rows($result)>0){
        //output data of each row
        showTable($result);
    }
    
    
    include("includes/_qn.html");
    if(isset($_GET["btn"])){
        $result2 = getPlayersByName($_GET["txn"]);
        showTable($result2);
        
        echo '<br><br><div class="container">Resultados para nombres que incluyan: '.$_GET["txn"]."</div><br>";
    }
    
    include("includes/_qh.html");
    if(isset($_GET["bth"])){
        $result3 = getBestPlayers($_GET["txh"]);    
        showTable($result3);
        echo '<br><br><div class="container">Resultados para handicaps mejores o iguales que: '.$_GET["txh"]."</div><br>";
    }

?>