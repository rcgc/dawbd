<?php

    $servername = "localhost";
    $username = "rcgc";
    $password = "";
    $dbname = "myDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Solve for special characters
    mysqli_set_charset($conn, "utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        echo '<div class="container">';
            echo '<div class="center-align">';
               
                echo '<br>';
                echo '<h4>Tabla original</h4>';
                echo '<br>';
               
                echo '<table class="centered">';
                    echo '<caption>My Guests</caption>';
                    echo '<thead>';
                        echo '<th>Id</th>';
                        echo '<th>First Name</th>';
                        echo '<th>Last Name</th>';
                        echo '<th>Email</th>';
                        echo '<th>Birthday</th>';
                    echo '</thead>';
                        
                    echo '<tbody>';        
                    
                                while($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                        echo '<td>'.$row["id"].'</td>';
                                        echo '<td>'.$row["firstname"].'</td>';
                                        echo '<td>'.$row["lastname"].'</td>';
                                        echo '<td>'.$row["email"].'</td>';
                                        echo '<td>'.$row["reg_date"].'</td>';
                                    echo '</tr>';
                                }
                        
                    echo '</tbody>';
                    echo '<tfoot>';
                    echo '</tfoot>';
                echo '</table>';
                
            echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<br>';
    } else {
        echo "0 results";
    }
    $conn->close();
    
    rwe_buttons();
    
    if(isset($_GET["btb"])){
        
        $servername = "localhost";
        $username = "rcgc";
        $password = "";
        $dbname = "myDB";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Solve for special characters
        mysqli_set_charset($conn, "utf8");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        echo '<div class="container">';
            echo'<div class="center-align">';
                echo '<div class="col m12 medium-table">';
                    echo '<table class="centered">';
                        echo '<caption>My Guests</caption>';
                        echo'<thead>';
                            echo '<tr>';
                                //echo '<th>Id</th>';
                                echo '<th>First name</th>';
                                echo '<th>Last name</th>';
                                echo '<th>Email</th>';
                                echo '<th>Birthday</th>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                            
                            //Specification of the SQL query
                            if ($_GET['txf']=='') {
                                $query='SELECT * FROM MyGuests';
                            } else {
                                $query="SELECT * FROM MyGuests WHERE firstname LIKE '%".$_GET['txf']."%' OR lastname LIKE '%".$_GET['txf']."%' OR email LIKE '%".$_GET['txf']."%'";
                            }
                            
                             // Query execution; returns identifier of the result group
                            $results = $conn->query($query);
                            
                             // cycle to explode every line of the results
                            while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                            
                                echo '<tr>';
                                // use of numeric index
                                //echo '<td>'.$row['id'].'</td>';
                                echo '<td>'.$row[1].'</td>';
                                echo '<td>'.$row['lastname'].'</td>';
                                echo '<td>'.$row['email'].'</td>';
                                echo '<td>'.$row['reg_date'].'</td>';
                            	echo '</tr>';
                            }  
        
                        echo '</tbody>';
                        echo '<tfoot>';
                        echo '</tfoot>';
                    echo '</table>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        echo '<br>';
        echo "<div class='container'><strong>Valor buscado: </strong>".$_GET['txf']."</div>";
        echo '<br>';
        echo '<br>';
        
        // it releases the associated results
        mysqli_free_result($results);
        // Options: MYSQLI_NUM to use only numeric indexes
        // MYSQLI_ASSOC to use only name (string) indexes
        // MYSQLI_BOTH, to use both
        $conn->close();
    }
    
?>