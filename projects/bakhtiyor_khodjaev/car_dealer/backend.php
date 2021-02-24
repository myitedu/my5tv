<?php

$email = $_POST['email']??null;
$password = $_POST['password']??null;
$save_username = $_POST['save_username']??0;

if (empty($username)  || empty($password)){
    $msg = "Your username or password is empty";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}

include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "";
$db->sql("SELECT * FROM `user` WHERE email = '$email' limit 1;");

if ($username!== $user['email']){
    $msg = "Your credentials are incorrect. Please try again.";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}
header("Location: index.php");

exit;
