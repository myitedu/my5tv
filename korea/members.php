<?php
session_start();
$check =  $_SESSION['is_user_logged_in']??null;

if ($check!==1){
    $msg = "You are not logged in";
    header("Location: login.php");
    exit($msg);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="logout.php">Logout</a>
</nav>
<img style="width: 100%" src="https://d.wildapricot.net/images/default-album/membership-only-website.png?v=0">
</body>
</html>