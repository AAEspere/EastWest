<?php
$emailto = 'eastwesthomecare@eastwesthealthservices.com';

//Apply form information
$emailfrom = $_POST['applyEmail'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$CSZ = $_POST['CSZ'];
$phone = $_POST['contactMobile'];
$message = $_POST['applyMessage'];
$jobType = $_POST['jobType'];
$resume = $_POST['resume'];

$subject = 'Contact Form Information';


$messagebody = 'APPLICATION INFORMATION'. "\n".
    
    
                'Name: '.$firstName. " " .$lastName."\n".
                'Email: '.$emailfrom. "\n".
                'Phone: '.$phone. "\n".
                'Address: ' .$address. "\n".
                'City, State, Zip Code: ' .$CSZ. "\n".
                'Job Type: ' .$jobType. "\n".
                'Message: '.$message. "\n";



$headers = 
	//'Return-Path: ' . $emailfrom . "\r\n" . 
	//'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-MSMail-Priority: High' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	//'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
//$params = '-f ' . $emailfrom;
$test = mail($emailto, $subject, $messagebody, $headers); // $params);
header('Location: contact.html');
// $test should be TRUE if the mail function is called correctly
?>