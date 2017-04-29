<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);

$sql = "INSERT INTO query_data (name,email_id,subject,message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn,$sql);

// if(! $result){
// 	die("Failed to insert values".mysqli_error($conn));
// }


// Mail code goes here 
$body = '<b> A new query has been received from: </b><b> Name :'.$name .  '</b><b>Email Id</b>'.$email.  '</br><b>Message :</b>'.$message ;
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//Calling the mail function
mail("bhuvansingh206@gmail.com",$subject,$body,$headers);


if(! mail("bhuvansingh206@gmail.com",$subject,$body,$headers)){
	echo 'The messgae was not send. Please try again later';
}


header("refresh:3;url=index.html");