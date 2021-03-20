<?php
############################################################################################
#Danger zone
$username = $_POST['username']??null;
$password = $_POST['password']??null;
if (empty($username)){
    $msg = "Your username is empty, Please enter your username and try it again";
    back($msg);
    exit;
}
if (empty($password)){
    $msg = "How dare you leave the password empty.";
    back($msg);
    exit;
}
############################################################################################
#Safe zone
require_once "database.php";
$obj = new \Database\database('myitedu');
$user = $obj->sql("SELECT id, email, password FROM users WHERE email='$username' limit 1");
$user_exists = (bool) $user;
if (!$user_exists){
    $msg = "Sorry, this $username is not registered in our system";
    back($msg);
}
//return to main page
###########################################
function back($msg){
    header("Location: login.php?msg=$msg");
    exit($msg);
}
###########################################
#safer zone because both username is found in our system



$db_password = $user[0]['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);
//$new_password = password_hash("abc123", PASSWORD_BCRYPT);
$password_matched = password_verify($password, $db_password);
if (!$password_matched){
    back("Your password is incorrect, Please try again");
}
###########################################
#even more safer zone because both username and password matched ---- HOME HOME
echo "<pre>";
echo "WOHOOOO, your username and password are matched successfully";
exit;