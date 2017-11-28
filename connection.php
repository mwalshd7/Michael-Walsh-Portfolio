<?php


function Connect()
{
$dbhost = "localhost";
$dbuser = "id2615334_mrwalsh";
$dbpass = "guest";
$dbname = "id2615334_contact";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
