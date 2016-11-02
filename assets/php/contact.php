<?php

if(isset($_GET['message'])){

	$name = $_GET['name'];
	$email = $_GET['email'];
	$message = $_GET['message'];
    
	
	$to      = 'erichappe@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Form Submission Successful';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to you@example.com';
	}
	
	
	echo json_encode($res);
}

?>