<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);


// if(! $result){
// 	die("Failed to insert values".mysqli_error($conn));
// }


// Mail code goes here 

$to = "bhuvansingh206@gmail.com";
$from = $email;
$body = '<b>Name:</b> '.$name.' <br> <b>Email:</b> '.$email.' <br><p> '.$message.'<p/>';
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail($to, $subject, $body, $headers);

if(! mail($to, $subject,$body,$headers)){
	echo 'The messgae was not send. Please try again later';
}


header("refresh:3;url=index.html");