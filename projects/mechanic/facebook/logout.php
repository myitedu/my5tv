<?php
session_start();
session_destroy();
header("Location: login.php?msg=you have been logged out");
exit;