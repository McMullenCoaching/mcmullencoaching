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

    mail($to,$email_subject,$message,,$headers);

    header("Location: McMullen Coaching Site Total.html");
?>