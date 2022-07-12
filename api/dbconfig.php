<?php

 $username = "root";
$password = "";
$database = "hotel_Hakoniwa";

$mysqli = new mysqli("localhost", $username, $password, $database);

if($conn->connect_error)
{
  echo "Error in connecting Database";
}
?>