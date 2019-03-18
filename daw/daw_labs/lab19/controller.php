<?php

require_once("util.php");



$pattern=strtolower($_GET['pattern']);

//$words=array("Distributed applications","AJAX","Java Server Pages", "Web services","Data bases","JavaScript","Networking","PHP");   //esto debe ser igual a lo que me recupere
                                                                                                                                    //una query

//$row = array();
$words = array();


while($row = mysqli_fetch_assoc(getNamePlayers())){
    array_push($words, $row['name']);
}


var_dump($words);
print_r($words);


$response="";
$size=0;
for($i=0; $i<count($words); $i++)
{
   $pos=stripos(strtolower($words[$i]),$pattern);
   if(!($pos===false))
   {
     $size++;
     $word=$words[$i];
     $response.="<option value=\"$word\">$word</option>";
   }
}
if($size>0)
  echo "<select id=\"list\" size=$size onclick=\"selectValue()\">$response</select>";
?>
