<?php
session_start();
$parms = $_POST;
$email = $parms['reg_email__']??null;
$password = $parms['reg_passwd__']??null;
$first_name = $parms['firstname']??null;
$lastname = $parms['lastname']??null;


if (!$email || !$password){
    header("Location: login.php?msg=Either Email or Password is missing");
    exit("Either Email or Password is missing");
}

include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT id, email, password FROM users WHERE email='$email' limit 1";
$user = $db->sql($sql);
$user = $user[0]??null;
if ($user){
    header("Location: login.php?msg=already have account");
    exit("already have account");
}


//You are inserting a new user
$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (first_name,last_name, email, password) VALUES ('$first_name','$lastname','$email','$password')";
$db->sql($sql);
//You are checking to see if the new user is inserted into users table.
$sql = "SELECT id FROM users WHERE email='$email' limit 1";
$user = $db->sql($sql);
$user = $user[0]??null;
if ($user){
    $_SESSION['is_user_logged_in'] = true;
    header("Location: index.php?msg=a new account created succeesfully");
    exit("a new account created");
}else{
    $_SESSION['is_user_logged_in'] = false;
    header("Location: login.php?msg=a new account is not created");
    exit("Not created");
}

/*
 * array(25) {
  ["jazoest"]=>
  string(4) "2739"
  ["lsd"]=>
  string(8) "AVqiWVPu"
  ["firstname"]=>
  string(3) "Jon"
  ["lastname"]=>
  string(9) "Toshmatov"
  ["reg_email__"]=>
  string(22) "jontoshmatov@yahoo.com"
  ["reg_email_confirmation__"]=>
  string(22) "jontoshmatov@yahoo.com"
  ["reg_passwd__"]=>
  string(6) "abc123"
  ["birthday_month"]=>
  string(1) "7"
  ["birthday_day"]=>
  string(1) "9"
  ["birthday_year"]=>
  string(4) "1995"
  ["sex"]=>
  string(1) "2"
  ["custom_gender"]=>
  string(0) ""
  ["websubmit"]=>
  string(0) ""
  ["referrer"]=>
  string(0) ""
  ["asked_to_login"]=>
  string(1) "0"
  ["use_custom_gender"]=>
  string(0) ""
  ["terms"]=>
  string(2) "on"
  ["ns"]=>
  string(1) "0"
  ["ri"]=>
  string(36) "f9ab61ec-389a-4ea4-96cb-0192666306b4"
  ["action_dialog_shown"]=>
  string(0) ""
  ["ignore"]=>
  string(24) "reg_email_confirmation__"
  ["locale"]=>
  string(5) "en_US"
  ["reg_instance"]=>
  string(24) "RtAHXzV_C1VokYGCywutIVyY"
  ["captcha_persist_data"]=>
  string(387) "AZlfvq8h4nAMJ72ZK1cCPnVqnbaUS9rfOG1KQYiAI4IdBC-_joThi2-fHiExyJOagJ6TTWPU-3xgztGZYkcR183ddqCfZa9hxWgA9Cd1jdXuo1G2xSx8Aq8ixt_pvUiZRV97k1iOgExowXVD9CbuohQPKi3XHDpfibzyTZoGSQVuyYWyhEfUnpBD5DDpqPUFyMD2kAGd9TXXjYxSjaDYWdlECK5JuZzfO-prSM0_knRt146bIffhfL5Wu0tk3ivFlXCI5oJR4tF0MDcWa55u3nHwTy7ayghTbh2656TGf8yR3pOYvHyZ9Ew0ICTs50UTrlIgIgw326fDDowsE_veDY9s0lvWQn19YLjRCK36PgsJG90JagZFb5SGCIoODC2DzYY"
  ["captcha_response"]=>
  string(0) ""
}
 */