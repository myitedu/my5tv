<?php
session_start();
$email = $_POST['email']??null;
$answer = $_POST['answer']??null;
if (empty($email)){
    $msg = "Your email is empty, Please enter your email address";
    header("Location: forgot.php?error=1&msg=".$msg);
    exit($msg);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $msg = "Your email is not valid, Please enter your email address";
    header("Location: forgot.php?error=1&msg=".$msg);
    exit($msg);
}
$domain = explode("@", $email);
if(!checkdnsrr($domain[1])) {
    $msg = "Your email domain is invalid, Please enter your email address";
    header("Location: forgot.php?error=1&msg=".$msg);
    exit($msg);
}

##########################################################################################
include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT u.id, u.email, sq.question, sq.answer FROM users AS u
JOIN security_questions AS sq
ON u.id = sq.user_id
WHERE u.email = 'jontoshmatov@yahoo.com';";
$user = $db->sql($sql);
$_SESSION['email'] = $email;
$maxlength = count($user);
$_SESSION['question'] = $user[rand(0,$maxlength-1)]['question'];

if ($answer){
$sql = "SELECT u.id, u.email, sq.question, sq.answer FROM users AS u
JOIN security_questions AS sq
ON u.id = sq.user_id
WHERE u.email = 'jontoshmatov@yahoo.com' and sq.answer = '$answer';";
$question_answer = $db->sql($sql);
if (!empty($question_answer)) {
    $_SESSION['change_password'] = true;
}else{
    $_SESSION['change_password'] = false;
}
}
header("Location: forgot.php");
exit;