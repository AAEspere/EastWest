<?php

require('recaptcha-master/src/autoload.php');

//information for the contact form email
$emailto = 'eastwesthomecare@eastwesthealthservices.com';
$emailfrom = $_POST['contactEmail'];
$fromname = $_POST['contactName'];
$phone = $_POST['contactMobile'];
$message = $_POST['contactSubject'];

$subject = 'Contact Form Information';


try {
    if(!empty($_POST)) {
        
        //validate recaptcha
        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }
        
        $recaptcha = new \ReCaptcha\ReCaptcha(secretcaptcha, new \ReCaptcha\RequestMethod\CurlPost());
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
        
        //the actual message of the email that will be sent
        $messagebody = 'CONTACT US FORM INFORMATION'. "\n".
    
    
                'Name: '.$fromname. "\n".
                'Email: '.$emailfrom. "\n".
                "Phone: ".$phone. "\n".
                "Message: ".$message. "\n";
        
        
        //I need this stuff so bluehost actually lets the php work
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
        // $test should be TRUE if the mail function is called correctly
        
        $test = mail($emailto, $subject, $messagebody, $headers); // $params);
        header('Location: contact.html');
        $responseArray = array('type' => 'success', 'message' => $okMessage);   
    }
    
}

    catch (\Exception $e) {
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

/*  OLD CODE

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
*/
?>