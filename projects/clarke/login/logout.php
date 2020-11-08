<?php
session_start();
unset($_SESSION['is_user_logged_in']);
session_destroy();

$msg = "Your have been successfully logged out";
header("Location: login.php?error=2&msg=$msg");
exit($msg);