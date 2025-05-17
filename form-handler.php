<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'info@yourwebsite.com';//that email which take this form

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'bholuptl28@gmail.com';

$header = "From: $email_form \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,email-subject,$email_body,$headers);

header("Location: contact.html");
>?