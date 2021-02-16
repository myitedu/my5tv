<?php
session_start();
$email = $_POST['email']??null;
$password = $_POST['password']??null;

if (empty($email)){
    exit("Your email is empty");
}
if (empty($password)){
    exit("Your password is empty");
}
$_SESSION['is_user_logged_in'] = FALSE;

if ($email=='jon@jon.com' && $password == 'abc123'){
    $_SESSION['is_user_logged_in'] = 1;
    $msg = "Your Login is successful";
    header("Location: facebook.php?msg=$msg");
    exit($msg);
}else{
    $_SESSION['is_user_logged_in'] = FALSE;
    $msg = "Emailingiz yoki passwordingiz notugri, boshqatdan kiriting!";
    header("Location: february13.php?msg=$msg");
   exit($msg);
}
