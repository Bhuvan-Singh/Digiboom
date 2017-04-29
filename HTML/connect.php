<?php 
$server = "localhost";
$user_name = "root";
$password = "bhuvan2087";
$database = "digiboom";
$conn = mysqli_connect($server,$user_name,$password,$database);

if(! $conn){
	die("Connection failed :".mysqli_connect_error());
}

?>