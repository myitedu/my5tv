<?php
session_start();
$parms = $_REQUEST;
$email = $parms['email']??null;
$password = $parms['pass']??null;

if (!$email || !$password){
    header("Location: login.php?msg=Either Email or Password is missing");
    exit("Either Email or Password is missing");
}

include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT id, email, password FROM users WHERE email='$email' limit 1";
$user = $db->sql($sql);
$user = $user[0]??null;



if (!isset($user)){
    header("Location: login.php?msg=You have no account registered");
    exit('No account is found');
}

if (password_verify($password, $user['password'])) {
    $_SESSION['is_user_logged_in'] = true;
    header("Location: index.php?msg=Login successfull");
    exit('Login successfull');
} else {
    $_SESSION['is_user_logged_in'] = false;
    header("Location: login.php?msg=Your credentials are incorrect");
    exit('Your credentials are incorrect');
}
//echo password_hash($password, PASSWORD_DEFAULT);

/*if ($email=='jon@jon.com' && $password == 'business'){
    $_SESSION['is_user_logged_in'] = true;
    header("Location: index.php?msg=Login successfull");
    exit;
}else{
    $_SESSION['is_user_logged_in'] = true;
    header("Location: login.php?msg=Your credentials are incorrect");
    exit;
}*/