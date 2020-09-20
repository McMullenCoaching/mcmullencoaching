<?php

$firstname = $lastname = $visitor_email = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = handlerSec($_POST['firstname']);
    $lastname = handlerSec($_POST['lastname']);
    $visitor_email = handlerSec($_POST['email']);
    $message = handlerSec($_POST['message']);
}
    function handlerSec($emailhandlerdata) {
        $emailhandlerdata = trim($emailhandlerdata);
        $emailhandlerdata = stripslashes($emailhandlerdata);
        $emailhandlerdata = htmlspecialchars($emailhandlerdata);
        return $emailhandlerdata;
    }

    $email_from = 'mcmullencoaching-inquiries@gmail.com';

    $email_subject = "New Coaching Inquiry";

    $email_body = "First Name: $firstname.\n".
                    "Last Name: $lastname.\n".
                        "Email: $visitor_email.\n".
                            "Message: $message.\n";

    $to = "mcmullencoaching@gmail.com";

    $headers = "From: $email_from\r\n";

    $headers = "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$message,$headers);

    header("Location: McMullen Coaching Site Total.html");
?>