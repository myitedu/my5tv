<?php
session_start();
unset($_SESSION['is_user_logged_in']);
session_destroy();
$msg = "You are logged out";
header("Location: february13.php?msg=$msg");
exit($msg);