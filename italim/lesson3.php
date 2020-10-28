<?php
$email = 'jon@gmail.com';
//Get the length of the string ($email)
//Change the string to upper or lower case
//Find a character in the string. for example @ sign in the email
//Returns the portion of string specified by the start and length parameters.

$atsign = strpos($email, '@');
$lng = strlen($email);

echo substr($email, $atsign+1, $lng);