<?php

//Connecting to database 
include 'connect_mobile.php';

// Number posted by the user
$mobile_number = $_POST['userNumber'];

//Query to insert the number into the table in the database
$sql = "INSERT INTO mobile_data(mobile_number)  VALUES ('$mobile_number')";
$result = mysqli_query($conn,$sql);

//To check if the query and connection were successful or not
if(! $result){
	die("Connection Failed:".mysqli_error($conn));
}

//Mailing the number code goes here 
$body = '<b>A new request has been received from:</b> '.$mobile_number;
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//Calling the mail function
mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers);

//To check if the mailwast sent successfully or not
if(! mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers)){
	echo 'The messgae was not send. Please try again later';
}
else{
	echo '<p> We have received your mobile number. Our team will get back in touch shortly.<br> Thank you. You will be redirected to home page in shortly</p> ';
}

//To redirect the user to the home page 
header("refresh:5;url=index.html");