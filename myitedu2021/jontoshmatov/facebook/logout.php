<?php
session_start();
unset($_SESSION['user']);
session_destroy();
$msg = "You have been logged out";
header("Location: login.php?msg=$msg");
exit($msg);