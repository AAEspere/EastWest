<?php
ob_start();
//eastwest email is eastwesthomecare@eastwesthealthservices.com
if(!isset($_POST['submit'])) {
    $emailto = 'aespere0@gmail.com';
    $emailfrom = $_POST['contactEmail'];
    $fromname = $_POST['contactName'];
    $phone = $_POST['contactPhone'];
    $message = $_POST['contactMessage'];
    $subject = 'EastWest - Contact Form Information';
    $messagebody = 'CONTACT US FORM INFORMATION'. "\n".
        'Name: '.$fromname. "\n".
        'Email: '.$emailfrom. "\n".
        "Phone: ".$phone. "\n".
        "Message: ".$message. "\n";
    mail($emailto, $subject, $messagebody, 'From: '.$emailfrom);
    header('Location: contact.html');
    exit();
}
?>