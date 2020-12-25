<?php
session_start();
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$save_login = $_POST['save_login']??0;

if (empty($email) || empty($password)){
    $msg = "Your username or password is empty";
    header("Location: index.php?error=1&msg=".$msg);
    exit($msg);
}
include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT * FROM users WHERE email = '$email' limit 1;";
$user = $db->sql($sql);
$user = $user[0]??null;

if ($email!== $user['email']){
    $msg = "This email is not registered, Please try again";
    header("Location: index.php?error=1&msg=".$msg);
    exit($msg);
}
$validate_password = password_verify($password, $user['password']);
if($validate_password) {
    $_SESSION['user_logged_on'] = 1;
    header("Location: account.php");
}else{
    $_SESSION['user_logged_on'] = 0;
    $msg = "Your password is incorrect, Please try again";
    header("Location: index.php?error=1&msg=".$msg);
}
exit;
