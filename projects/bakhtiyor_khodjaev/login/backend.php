<?php
$username = $_POST['username']??null;
$password = $_POST['password']??null;
$save_login = $_POST['save_login']??0;

if (empty($username) || empty($password)){
    $msg = "Your username or password is empty";
    header("Location: index.php?error=1&msg=".$msg);
    exit($msg);
}
if ($username!=='jon@jon.com' || $password !== 'abc123'){
    $msg = "Your credentials are incorrect, Please try again";
    header("Location: index.php?error=1&msg=".$msg);
    exit($msg);
}
header("Location: account.php");
exit;
