<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'mcmullencoaching-inquiries@gmail.com';

    $email_subject = "New Coaching Inquiry";

    $email_body = "First Name: $firstname.\n".
                    "Last Name: $lastname.\n".
                        "Email: $visitor_email.\n".
                            "Message: $message.\n";

    $to = "mcmullencoaching@gmail.com";

    $headers = "From: $email_from\r\n";

    $headers = "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>

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