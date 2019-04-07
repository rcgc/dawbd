<?php

    require_once("util.php");
    
    include("_form_view.html");
    
    if(isset($_POST['btn_action'])){
        include("send.php");
        header("Location: index.php");
    }

?>