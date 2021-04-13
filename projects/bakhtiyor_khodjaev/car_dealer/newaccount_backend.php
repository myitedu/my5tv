<?php
$firstname = $_POST['first_name']??null;
$lastname = $_POST['last_name']??null;
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$password_confirm = $_POST['password_confirm']??null;


if ($password !== $password_confirm){
    $msg = "Your both password must match. Please try again.";
    header("Location: new_account.php?error=1&msg=".$msg);
    exit($msg);
}
include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT * FROM users2 WHERE email = '$email' limit 1;";
$user = $db->sql($sql);
$user = $user[0]??null;

if (!empty($user['email']) && $user['email']===$email){
    $msg = "Your email is already registered. Please use other email.";
    header("Location: new_account.php?error=1&msg=".$msg);
    exit($msg);
}
$password = password_hash($password, PASSWORD_BCRYPT);
$sql = "INSERT INTO users2 (email,password,first_name,last_name) VALUES('$email','$password','$firstname','$lastname');";
$newaccount = $db->sql($sql);
$msg = "Your account has been created successfully";
header("Location: login.php?error=0&msg=".$msg);

exit($msg);


