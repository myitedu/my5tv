<?php
$parms = $_POST;
$first_name = $parms['first_name']??null;
$last_name = $parms['last_name']??null;
$email = $parms['email']??null;
$phone = $parms['phone_number']??null;
$message = $parms['message']??null;
$message = strip_tags($message);

#Option 1 for email validation
#Option 2 for email validation
#Option 3 for email validation - REGEX COMING UP in future classes

$pattern = "#\([0-9]{3}\) [0-9]{3}-[0-9]{4}#";
$is_phone_valid = (bool) preg_match($pattern, $phone);

if(!$is_phone_valid) == if ($is_phone_valid === FALSE);







echo "<p>First name: $first_name</p>";
echo "<p>Last name: $last_name</p>";
echo "<p>Email: $email</p>";
echo "<p>Phone: $phone</p>";
echo "<p>Message: $message</p>";
