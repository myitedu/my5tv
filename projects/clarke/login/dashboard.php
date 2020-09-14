<?php
session_start();

if ($_SESSION['is_user_logged_in']!==1){
    $msg = "You must be authorized to display this page";
    header("Location: login.php?error=1&msg=$msg");
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
<div class="mymenu">
    <a href="logout.php">Logout</a>
</div>
<img class="justimage" src="https://pestcontrolseo.files.wordpress.com/2012/01/oldfacebookadspace.jpg">
<style>
    .justimage{
        width: 100%;
    }
</style>
<style>
    .mymenu{
        width: 100%;
        text-align: right;
    }

    .mymenu a{
        margin: 5px;
    }

</style>
</body>
</html>