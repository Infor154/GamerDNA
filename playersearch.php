<?php

$keyword = $_POST['keyword'];
$apikey = "3dcae71dd695d54906bee511a0bb7a08c3510a48";  /* put your API key here */ 
$idparse= "http://helix.gamerdna.com/members/info?id=";
$apiparse= "2nt&apikey=";

echo'<h3>'.$keyword.'</h3>';
echo'<a href=http://helix.gamerdna.com/members/info?id=' .$keyword. '2nt&apikey=' .$apikey.  '>Click for Query</a>';


?>



