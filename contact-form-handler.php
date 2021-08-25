<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['messsage'];

$email_from = $_POST['email'];

$email_subject = "new request";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Message: $message.\n";

$to = "013198_1714210417@protonmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>
