<?php

$username = $_POST['username']??null;
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
$db->sql("");

if ($username!=='bakha@mail.ru' || $password !== 'abc123'){
    $msg = "Your credentials are incorrect. Please try again.";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}
header("Location: index.php");

exit;
