<?php

$server = "localhost";
$user_name = "root";
$pwd = "bhuvan2087";
$database = "digiboom";

$conn = mysqli_connect($server,$user_name,$pwd,$database);

if(! $conn){
	die("Connection Failed : ".mysqli_connect_error());
}

?>