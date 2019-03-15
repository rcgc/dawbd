<?php

	 function navbar() {
        include("includes/_navbar.html");
    }
    
    function headerr(){
        include("header.php");
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
    	echo "<head><title>Lab".$num."</title></head>";
    }
    
    function ejercicio_db1(){
        include("ejercicio_db1.php");
    }
    
    function rwe_buttons(){
        include("includes/_rwe_btns.html");
    }
    
    function connectDb(){
        $servername = "localhost";
        $username = "rcgc";
        $password = "";
        $dbname = "golf";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
        mysqli_set_charset($con, "utf8");
        
        //Check connection
        if(!$con){
            die("Connection failed: ".mysqli_connect_error());
        }return $con;
        
    }
    
    function closeDb($mysql){
        mysqli_close($mysql);
    }
    
    function getPlayers(){
        
        $conn = connectDb();
        
        $sql = "SELECT id, name, handicap, category, club, email, telephone, gender FROM players";
        
        $result = mysqli_query($conn, $sql);
        
        closeDb($conn);
        
        return $result;
    }
    
    function getPlayersByName($playerName){
        
        $conn = connectDb();
        
        $sql = "SELECT id, name, handicap, category, club, email, telephone, gender FROM players WHERE name LIKE '%".$playerName."%'";
        
        $result = mysqli_query($conn, $sql); 
        
        closeDb($conn);
        
        return $result;
        
    }
    
    function getBestPlayers($handicap){
        
        $conn = connectDb();
        
        $sql = "SELECT id, name, handicap, category, club, email, telephone, gender FROM players WHERE handicap <= '".$handicap."'";
        
        $result = mysqli_query($conn, $sql); 
        
        closeDb($conn);
        
        return $result;
    }
    
    function players(){
        include("query_players.php");
    }
    
    function showTable($result){
        echo '<div class = "container">';
            echo '<div class= "center-align">';
                echo '<table class="striped">';
                    echo '<caption class="teal lighten-2"><strong><p class="white-text">Players</p></storng></caption>';
                    echo '<thead>';
                        echo '<th>Id</th>';
                        echo '<th>Name</th>';
                        echo '<th>Handicap</th>';
                        echo '<th>Category</th>';
                        echo '<th>Club</th>';
                        echo '<th>Email</th>';
                        echo '<th>Telephone</th>';
                        echo '<th>Gender</th>';
                        echo '</thead>';
                        
                        echo '<tbody>';
                        
        while($row = mysqli_fetch_assoc($result)){
    
                echo '<tr>';
                    echo '<td>'.$row["id"].'</td>';
                    echo '<td>'.$row["name"].'</td>';
                    echo '<td>'.$row["handicap"].'</td>';
                    echo '<td>'.$row["category"].'</td>';
                    echo '<td>'.$row["club"].'</td>';
                    echo '<td>'.$row["email"].'</td>';
                    echo '<td>'.$row["telephone"].'</td>';
                    echo '<td>'.$row["gender"].'</td>';
                echo '</tr>';
            
        }
        
                    echo '</tbody>';
                    echo '<tfoot></tfoot>';
                echo '</table>';
            echo '</div>';
        echo '</div>';
        
    }
    
    function insert_player_model(){
        include ("registro_jugador.php");
    }
    
    function insert_player($name, $handicap, $category, $club, $email, $telephone, $gender){
        $conn = connectDb();
        
        $sql = "INSERT INTO players (name, handicap, category, club, email, telephone, gender) VALUES (\"". $name ."\",". $handicap. ",\"". $category . "\",\"". $club ."\",\"". $email ."\",". $telephone .",\"". $gender ."\");";
        
        if(mysqli_query($conn, $sql)){
            echo "New record created successfully";
            closeDb($conn);
            return true;
        } else {
            echo "Error: ". $sql . "<br>". mysqli_error($conn);
            closeDb($conn);
            return false;
        }
        closeDb($conn);
    }
    
    function deletePlayerByName($name){
        
    }
    
    function updatePlayerByName($name){
        
    }

?>  