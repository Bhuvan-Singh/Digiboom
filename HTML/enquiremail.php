<?php

//Connecting to database 

include 'connect.php';

// Details posted by the user

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);


//Query to insert the details into the table in the database

$sql = "INSERT INTO query_data (name,email_id,subject,message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn,$sql);

//To check if the query and connection were successful or not

if(! $result){
	die("Connection Failed:".mysqli_error($conn));
}


// Mail code goes here

$body = nl2br("Name:.$name.\n subject:$subject.\n Message: .$message");
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//Calling the mail function

mail("bhuvansingh206@gmail.com","New query received",$body,$headers);

if(! mail("bhuvansingh206@gmail.com","New query received",$body,$headers)){
	echo 'The messgae was not send. Please try again later';
}
else{
	echo '<p> We have received your query. Our team will get back in touch shortly.';
	echo $body;
	echo 'Thank you. You will be redirected to home page in shortly</p> ';
}


header("refresh:5;url=index.html");