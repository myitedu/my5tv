<?php
$email = $_REQUEST['email']??NULL;
$password = $_REQUEST['password']??NULL;

if (empty($email)){
    exit("Your email is empty");
}

if (empty($password)){
    exit("Your password is empty");
}

echo "Everything is good";