<?php
    
    require_once('util.php');
    
    include('eliminar_texto/_eliminar_upper_view.html');
    
    include('eliminar_texto/_eliminar_medium_view.html');
    
    if(isset($_POST['btn_delete'])){
        // !preg_match("/^[a-zA-Z]*$/", $nombre)
        //[^\p{Latin}
        if(preg_match("/^[1-9][0-9]{0,15}$/", $_POST['txt_delete']) && !empty($_POST['txt_delete'])){  //0-9 para que acepte números según Gil
            sp_delete_text($_POST['txt_delete']);
            header("Location: index.php");    
        }else{
            //Do something    
        }
    }
    
    include('eliminar_texto/_eliminar_lower_view.html');

?>