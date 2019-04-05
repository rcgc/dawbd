<?php

    require_once("util.php");
    
    include("suggestions/_suggestions_view.html");
    
    if(isset($_REQUEST['First_name'])){
        include("suggestions/suggestions.model.php");   
    }

?>