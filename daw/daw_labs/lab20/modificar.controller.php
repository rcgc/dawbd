<?php
    
    require_once('util.php');
    
    include('modificar_texto/_modificar_upper_view.html');
    
    include('modificar_texto/_modificar_medium_view.html');
    
    if(isset($_POST['btn_modify'])){
        // !preg_match("/^[a-zA-Z]*$/", $nombre)
        //[^\p{Latin}
        if(preg_match("/^[1-9][0-9]{0,15}$/", $_POST['id_modify']) && 
            preg_match("/^\pL+(?>[- ']\pL+)*$/u", $_POST['txt_modify']) &&       //0-9 para que acepte números según Gil
            !empty($_POST['id_modify']) &&
            !empty($_POST['txt_modify'])){
            
            sp_modify_text($_POST['id_modify'], $_POST['txt_modify']);
            //header("Location: index.php");
        }else{
            //Do something    
        }
    }
    
    include('modificar_texto/_modificar_lower_view.html');
?>