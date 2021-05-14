<?php

if(isset($_POST['submit'])) {
    
    //this should limit the amount of spam from bots
    //people might still be able to manually spam though
    if(!empty($_POST['email']) || !empty($_POST['phone']) || !empty($_POST['yourName'])) die();

    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $phone = $_POST['contactMobile'];
    $message = $_POST['contactSubject'];
    
    $mailTo = 'eastwesthomecare@eastwesthealthservices.com';

    $subject = "Contact Form information";
    
    $sendMessage .= "Name: ".$name. "\n".
                    "Phone: ".$phone. "\n".
                    "Message: ".$message. "\n";
    
    mail($mailTo, $subject, $sendMessage, $headers);
    header('Location: contact.html');
    exit();
}

?>


