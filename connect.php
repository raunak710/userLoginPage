<?php

$host = "localhost";
$user = "root";
$pass = "";
$db= "login";
$conn = new mysqli($host , $user, $pass, $db);
if ( $conn -> connect_error){
    echo " falied to connect Database".$conn->connect_error;
}
?>