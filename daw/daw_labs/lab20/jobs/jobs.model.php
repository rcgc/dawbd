<?php
    
    $q = intval($_GET['q']);
    
    $con = mysqli_connect('localhost','rcgc','','jobs');
    
    mysqli_set_charset($con, "utf8");
    
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,"jobs"); //segundo parametro es db_name
    
    $sql="SELECT * FROM user WHERE id=".$q; //tenia comillas sencillas a forma de cadena originalmente
    
    $result = mysqli_query($con,$sql);
    
    include("_jobs_table_upper_view.html");
            
    while($row = mysqli_fetch_array($result)) {
        
        $FirstName = $row['FirstName'];
        $LastName = $row['LastName'];
        $Age = $row['Age'];
        $Hometown = $row['Hometown'];
        $Job = $row['job'];
        
        include("_jobs_table_medium_view.html");
        
    }
    
    include("_jobs_table_lower_view.html");

    mysqli_close($con);
    
?>