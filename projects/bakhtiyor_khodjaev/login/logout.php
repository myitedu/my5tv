<?php
session_start();
session_destroy();
$msg = "You have been logged out";
header("Location: index.php?error=1&msg=".$msg);
exit($msg);