<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['messsage'];

$email_from = $_POST['email'];

$subject = "new request";

$email_body = "request from ".$name.".\n\n".$message;

$mailTo = "013198_1714210417@protonmail.com";

$headers = "From: ".$mailFrom;


mail($mailTo,$subject,$email_body,$headers);

header("Location: index.html");
}
?>
