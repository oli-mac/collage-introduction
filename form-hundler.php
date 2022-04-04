<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'isolyadmulugeta@gmail.com';

$email_subject=' new form submision';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User subject: $subject.\n".
                "User Message: $message.\n";

$to = 'adumulugeta21@gmail.com';

$headers = "From: $email_form \r\n";

$headers.= "Replt-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>