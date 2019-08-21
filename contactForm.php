<?php
$emailto = 'eastwesthomecare@eastwesthealthservices.com';
$emailfrom = $_POST['contactEmail'];
$fromname = $_POST['contactName'];
$phone = $_POST['contactMobile'];
$message = $_POST['contactSubject'];

$subject = 'Contact Form Information';

$messagebody = 'CONTACT US FORM INFORMATION'. "\n".
    
    
                'Name: '.$fromname. "\n".
                'Email: '.$emailfrom. "\n".
                    "Phone: ".$phone. "\n".
                    "Message: ".$message. "\n";

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