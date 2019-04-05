<?php

    require_once("util.php");
    
    include("jobs/_jobs_view.html");
    
    if (isset($_REQUEST['users'])){
        include("jobs/jobs.model.php");       
    }
    
?>