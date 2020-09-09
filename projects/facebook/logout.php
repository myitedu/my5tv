<?php
session_start();
$_SESSION['is_user_logged_in'] = -1;
unset($_SESSION['is_user_logged_in']);
session_destroy();
redirect("Your have been logged out", 'login.php', 1);
function redirect($msg=null, $url, $error=1){
    header("Location: $url?error=$error&msg=$msg");
    exit($msg);
}