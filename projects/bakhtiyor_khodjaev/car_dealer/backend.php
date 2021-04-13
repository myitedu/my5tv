<?php;
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$save_username = $_POST['save_username']??0;

if (empty($email)  || empty($password)){
    $msg = "Your username or password is empty";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}

include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT * FROM `user2` WHERE email = '$email' limit 1;";
$user = $db->sql($sql);
$user = $user[0]??null;
if ($email!== $user['email']){
    $msg = "Your email is incorrect. Please try again.";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}

$validate_password = password_verify($password,$user['password']);

if ($validate_password){
    header("Location: index.php");
}else{
    $msg = "Your password is incorrect. Please try again.";
    header("Location: login.php?error=1&msg=".$msg);
    exit($msg);
}


exit;
