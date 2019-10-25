<?php
	
    $userFirstName 		= $_POST['myFirstName'];
    $userLastName 		= $_POST['myLastName'];
	$userEmail	 	= $_POST['myEmail'];
	$userMessage 		= $_POST['myMessage'];
	$to 			= "mcmullencoaching@gmail.com";
	$subject 		= "Customer Inquiry!";
	$body 			= "Information Submitted:";
    $body .= "\r\n Name: " . $userFirstName;
    $body .= "\r\n Name: " . $userLastName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
	mail($to, $subject, $body);
?>