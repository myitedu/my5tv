<?php
require '/PHPMailer/PHPMailerAutoload.php';
ini_set("SMTP", "smtp.mailtrap.io");
ini_set("sendmail_from", "YOURMAIL@gmail.com");
$message = "The mail message was sent with the following mail setting:\r\nSMTP = smtp.mailtrap.io\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";
$headers = "From: YOURMAIL@gmail.com";
mail("Sending@provider.com", "Testing", $message, $headers);