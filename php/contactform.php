<?php

if(isset($_POST['submit'])) {
    
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


