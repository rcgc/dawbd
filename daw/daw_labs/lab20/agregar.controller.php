<?php
    
    require_once('util.php');
    
    include('agregar_texto/_agregar_upper_view.html');
    
    include('agregar_texto/_agregar_medium_view.html');
    
    if(isset($_POST['btn_add'])){
        // !preg_match("/^[a-zA-Z]*$/", $nombre)
        //[^\p{Latin}
        if(preg_match("/^\pL+(?>[- ']\pL+)*$/u", $_POST['txt_add']) && !empty($_POST['txt_add'])){  //0-9 para que acepte números según Gil
            sp_new_text($_POST['txt_add']);
            header("Location: index.php");    
        }else{
            //Do something    
        }
    }
    
    include('agregar_texto/_agregar_lower_view.html');

?>