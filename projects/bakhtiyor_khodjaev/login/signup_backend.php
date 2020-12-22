<?php
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$password_confirm = $_POST['password_confirm']??null;
if ($password !== $password_confirm){
    $msg = "Your both passwords must match, Please try again";
    header("Location: signup.php?error=1&msg=".$msg);
    exit($msg);
}
include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT * FROM users WHERE email = '$email' limit 1;";
$user = $db->sql($sql);
$user = $user[0]??null;
if (!empty($user['email']) && $user['email']===$email){
    $msg = "Your email is already registered with our database";
    header("Location: signup.php?error=1&msg=".$msg);
    exit($msg);
}
$password = password_hash($password, PASSWORD_BCRYPT);
$sql = "INSERT INTO users (email, password) VALUES('$email','$password');";
$newaccount = $db->sql($sql);
$_SESSION['user_logged_on'] = 1;
header("Location: account.php");

