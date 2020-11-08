<?php
session_start();
$parms = $_POST??null;
$username = $parms['username']??null;
$password = $parms['password']??null;
$msg = null;

if (empty($username)){
    $msg = "Your username is empty, please enter it and try again.";
    header("Location: login.php?error=1&msg=$msg");
    exit($msg);
}

if (empty($password)){
    $msg = "Your password is empty, please enter it and try again.";
    header("Location: login.php?error=1&msg=$msg");
    exit($msg);
}

require_once "database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT id, email, password FROM users WHERE email='$username' limit 1";
$user = $db->sql($sql);
$user = $user[0];
if (empty($user)){
    $msg = "You have no account by that username";
    header("Location: login.php?error=1&msg=$msg");
    exit($msg);
}
if (!password_verify($password, $user['password'])){
    $msg = "Your password is incorrect";
    header("Location: login.php?error=1&msg=$msg");
    exit($msg);
}
$_SESSION['is_user_logged_in']=1;
$msg = "The User has been authenticated";
header("Location: dashboard.php");
exit($msg);