<?php
session_start();
$username = $_POST['username']??null;
$password = $_POST['password']??null;
$msg =  null;
if (empty($username)){
    $msg = "Your username is empty. Please enter and try again";
    redirect($msg, 'login.php',1);
}
if (empty($password)){
    $msg = "Your password is empty. Please enter and try again";
    redirect($msg, 'login.php',1);
}
if (!filter_var($username, FILTER_VALIDATE_EMAIL)){
    redirect("Your email is in a wrong format", 'login.php', 1);
}
function redirect($msg=null, $url, $error=1){
    header("Location: $url?error=$error&msg=$msg");
    exit($msg);
}
#############################################################################################
####Authenticated Zone#####
require_once "database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT id, email, password FROM users WHERE email='$username'";
$user = $db->sql($sql);
$user = $user[0];
if (empty($user)){
    redirect("Your username is not registered with us",'login.php',1);
}
if (!password_verify($password, $user['password'])){
    redirect("Your password is incorrect",'login.php',1);
}
$_SESSION['is_user_logged_in'] = 1;
redirect(null, 'dashboard.php',0);