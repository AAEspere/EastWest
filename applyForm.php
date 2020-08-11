<?php
//PHPMailer
require_once('PHPMailer-master/src/PHPMailer.php');
require_once('PHPMailer-master/src/Exception.php');
require_once('PHPMailer-master/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
ob_start();
$email = new PHPMailer();
$emailto = 'aespere0@gmail.com';
$emailfrom = $_POST['applyEmail'];
$emailDomain = 'eastwfa1@box5583.bluehost.com';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$CSZ = $_POST['CSZ'];
$phone = $_POST['phone'];
$jobType = $_POST['jobType'];
$subject = 'EastWest - Apply Form Information';
$message = $_POST['applyMessage'];
$messagebody = 'APPLY FORM INFORMATION'. "\n\n".
	'Name: '.$firstName.' '.$lastName."\n".
	'Email: '.$emailfrom."\n".
	'Phone Number: '.$phone."\n".
	'Address: '.$address."\n".
	'City, State, Zip Code: '.$CSZ."\n".
	'Job: '.$jobType."\n".
	'Message: '.$message."\n";
$attachment_tmp = $_FILES['resume']['tmp_name'];
$attachment_name = $_FILES['resume']['name'];
//PHPMailer
$email->setFrom($emailDomain);
$email->addAddress($emailto);
$email->Body = $messagebody;
$email->Subject = $subject;
$email->addAttachment($attachment_tmp, $attachment_name);
$email->send();
header('Location: apply.html');
exit();
?>