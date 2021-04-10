<?php
session_start();
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
$user = $obj->sql("SELECT * FROM users WHERE email='$username' limit 1");
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
$user_full_name = $user[0]['name']??$user[0]['first_name']." ".$user[0]['last_name'];
//$hash = password_hash($password, PASSWORD_BCRYPT);
//$new_password = password_hash("abc123", PASSWORD_BCRYPT);

$password_matched = password_verify($password, $db_password);

if (!$password_matched){
    back("Your password is incorrect, Please try again");
}
###########################################
###########################################
###########################################
###########################################
###########################################
#even more safer zone because both username and password matched ---- HOME HOME

$_SESSION['user'] = [
    'id' => $user[0]['id'],
    'name' => $user_full_name,
    'avatar' => $user[0]['avatar']??"https://pickaface.net/gallery/avatar/20151109_144853_2380_sample.png",
];
$msg = "You are logged in";
header("Location: index.php?msg=$msg");
exit($msg);
###########################################
###########################################
###########################################
###########################################
###########################################

