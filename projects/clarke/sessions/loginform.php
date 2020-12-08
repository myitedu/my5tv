<?php
session_start();
$parms = $_POST??null;

$username = $parms['email']??null;
$password = $parms['password']??null;
if (!($username) || !($password)){
    header("Location:login.php?error=1&msg=Either username or password is missing");
    exit;
}

if ($username=='test@test.com' && $password=='abc123'){
    $_SESSION['is_user_logged_on'] = true;
}else{
    header("Location:login.php?error=1&msg=Either username or password did not match");
    exit;
}

header("Location:membersonly.php?error=0&msg=You are logged in");