<?php
session_start();
session_destroy();
$msg = "You are logged out";
header("Location: login.php");
exit($msg);